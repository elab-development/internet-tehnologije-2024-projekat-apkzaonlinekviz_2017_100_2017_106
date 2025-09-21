<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Quiz;
use App\Models\QuizAttempt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuizController extends Controller
{
    public function index(Request $request)
    {
        $query = Quiz::with(['creator:id,name', 'questions'])
            ->where('is_active', true);

        if ($request->has('category') && $request->category) {
            $query->where('category', $request->category);
        }

        if ($request->has('difficulty') && $request->difficulty) {
            $query->where('difficulty', $request->difficulty);
        }

        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'LIKE', "%{$search}%")
                  ->orWhere('description', 'LIKE', "%{$search}%");
            });
        }

        $quizzes = $query->paginate(10);

        return response()->json([
            'success' => true,
            'data' => $quizzes
        ]);
    }

    public function show(Quiz $quiz)
    {
        $quiz->load(['questions.answers', 'creator:id,name']);
        
        return response()->json([
            'success' => true,
            'data' => $quiz
        ]);
    }

    public function store(Request $request)
    {
        if (!$request->user()->isAdmin()) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized'
            ], 403);
        }

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'required|string|max:100',
            'difficulty' => 'required|in:easy,medium,hard',
            'questions' => 'required|array|min:1',
            'questions.*.question_text' => 'required|string',
            'questions.*.type' => 'required|in:multiple_choice,true_false',
            'questions.*.points' => 'required|integer|min:1',
            'questions.*.answers' => 'required|array|min:2',
            'questions.*.answers.*.answer_text' => 'required|string',
            'questions.*.answers.*.is_correct' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation errors',
                'errors' => $validator->errors()
            ], 422);
        }

        $quiz = Quiz::create([
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
            'difficulty' => $request->difficulty,
            'created_by' => $request->user()->id,
        ]);

        foreach ($request->questions as $questionData) {
            $question = $quiz->questions()->create([
                'question_text' => $questionData['question_text'],
                'type' => $questionData['type'],
                'points' => $questionData['points'],
            ]);

            foreach ($questionData['answers'] as $answerData) {
                $question->answers()->create([
                    'answer_text' => $answerData['answer_text'],
                    'is_correct' => $answerData['is_correct'],
                ]);
            }
        }

        return response()->json([
            'success' => true,
            'message' => 'Quiz created successfully',
            'data' => $quiz->load(['questions.answers'])
        ], 201);
    }

    public function update(Request $request, Quiz $quiz)
    {
        if (!$request->user()->isAdmin()) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized'
            ], 403);
        }

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'required|string|max:100',
            'difficulty' => 'required|in:easy,medium,hard',
            'is_active' => 'boolean',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation errors',
                'errors' => $validator->errors()
            ], 422);
        }

        $quiz->update($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Quiz updated successfully',
            'data' => $quiz
        ]);
    }

    public function destroy(Request $request, Quiz $quiz)
    {
        if (!$request->user()->isAdmin()) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized'
            ], 403);
        }

        $quiz->delete();

        return response()->json([
            'success' => true,
            'message' => 'Quiz deleted successfully'
        ]);
    }

    public function start(Request $request, Quiz $quiz)
    {
        if (!$quiz->is_active) {
            return response()->json([
                'success' => false,
                'message' => 'Quiz is not active'
            ], 400);
        }

        $attempt = QuizAttempt::create([
            'user_id' => $request->user()->id,
            'quiz_id' => $quiz->id,
            'total_questions' => $quiz->questions()->count(),
            'started_at' => now(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Quiz started successfully',
            'data' => [
                'attempt_id' => $attempt->id,
                'quiz' => $quiz->load(['questions.answers'])
            ]
        ]);
    }
}