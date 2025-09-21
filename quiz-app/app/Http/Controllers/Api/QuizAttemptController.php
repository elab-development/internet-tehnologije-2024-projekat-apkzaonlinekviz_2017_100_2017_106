<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\QuizAttempt;
use App\Models\UserAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuizAttemptController extends Controller
{
    public function submitAnswer(Request $request, QuizAttempt $attempt)
    {
        if ($attempt->user_id !== $request->user()->id) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized'
            ], 403);
        }

        if ($attempt->completed_at) {
            return response()->json([
                'success' => false,
                'message' => 'Quiz already completed'
            ], 400);
        }

        $validator = Validator::make($request->all(), [
            'question_id' => 'required|exists:questions,id',
            'answer_id' => 'required|exists:answers,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation errors',
                'errors' => $validator->errors()
            ], 422);
        }

        $question = $attempt->quiz->questions()->find($request->question_id);
        if (!$question) {
            return response()->json([
                'success' => false,
                'message' => 'Question not found in this quiz'
            ], 400);
        }

        $answer = $question->answers()->find($request->answer_id);
        if (!$answer) {
            return response()->json([
                'success' => false,
                'message' => 'Answer not found for this question'
            ], 400);
        }

        UserAnswer::updateOrCreate(
            [
                'quiz_attempt_id' => $attempt->id,
                'question_id' => $request->question_id,
            ],
            [
                'answer_id' => $request->answer_id,
            ]
        );

        return response()->json([
            'success' => true,
            'message' => 'Answer submitted successfully'
        ]);
    }

    public function complete(Request $request, QuizAttempt $attempt)
    {
        if ($attempt->user_id !== $request->user()->id) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized'
            ], 403);
        }

        if ($attempt->completed_at) {
            return response()->json([
                'success' => false,
                'message' => 'Quiz already completed'
            ], 400);
        }

        $correctAnswers = UserAnswer::where('quiz_attempt_id', $attempt->id)
            ->whereHas('answer', function($query) {
                $query->where('is_correct', true);
            })->count();

        $attempt->update([
            'score' => $correctAnswers,
            'completed_at' => now(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Quiz completed successfully',
            'data' => [
                'score' => $correctAnswers,
                'total_questions' => $attempt->total_questions,
                'percentage' => $attempt->percentage
            ]
        ]);
    }

    public function results(QuizAttempt $attempt)
    {
        if ($attempt->user_id !== auth()->id()) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized'
            ], 403);
        }

        $attempt->load([
            'quiz:id,title',
            'userAnswers.question:id,question_text,points',
            'userAnswers.answer:id,answer_text,is_correct'
        ]);

        return response()->json([
            'success' => true,
            'data' => $attempt
        ]);
    }

    public function userAttempts(Request $request)
    {
        $attempts = QuizAttempt::where('user_id', $request->user()->id)
            ->with(['quiz:id,title,category,difficulty'])
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return response()->json([
            'success' => true,
            'data' => $attempts
        ]);
    }
}