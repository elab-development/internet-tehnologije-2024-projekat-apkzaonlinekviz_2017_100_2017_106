Veb aplikacija za online kviz koja će se razvijati u React-u treba da pruži korisnicima mogućnost da učestvuju u interaktivnim kvizovima na različite teme. Korisnicima treba omogućiti kreiranje naloga, pregled dostupnih kvizova, izbor željene kategorije i odgovaranje na pitanja u realnom vremenu sa prikazom rezultata na kraju svakog kviza. Platforma omogućava administratorima da kreiraju, uređuju i objavljuju nova pitanja i kvizove, prate statistiku rezultata i prilagođavaju sadržaj korisnicima na osnovu njihovih preferencija.

## Veb aplikacija za online kviz

> **Opis:**
> - Veb aplikacija za online kviz razvijena u React-u.
> - Korisnicima omogućava učestvovanje u interaktivnim kvizovima na različite teme.
> - Mogućnost kreiranja naloga i pregleda dostupnih kvizova.
> - Izbor željene kategorije i odgovaranje na pitanja u realnom vremenu.
> - Prikaz rezultata na kraju svakog kviza.
> - Administratori mogu kreirati, uređivati i objavljivati pitanja i kvizove.
> - Prikaz i analiza statistike rezultata korisnika.
> - Prilagođavanje sadržaja korisnicima na osnovu njihovih preferencija.

---

## [Prvi domaći] Minimalni zahtevi

> **Tehnologije:**
> - Laravel (bez frontenda)
> - Postman za testiranje
> - Git za verzionisanje (minimum 10 smislenih komitova)

> **Kolaboracija:**
> - Oba člana tima moraju imati komitove
> - Zabranjeno je komitovanje gotovog projekta

> **Git repozitorijum:**
> - Projekat mora biti javan (public)
> - Postaviti na GitHub, GitLab ili Bitbucket
> - Projekat mora biti povezan sa Elab GitHub organizacijom

> **Modeli i migracije:**
> - Minimum 3 međusobno povezana modela
> - Minimum 5 različitih migracija:
>   - Kreiranje tabele
>   - Izmena kolone
>   - Dodavanje kolone
>   - Brisanje kolone
>   - Dodavanje ograničenja i spoljnih ključeva

> **API rute:**
> - Poštovati REST API konvenciju
> - API mora vraćati podatke u JSON formatu
> - Obrada grešaka takođe u JSON-u
> - Minimum 1 resource ruta + 3 različita tipa API ruta

> **Autentifikacija:**
> - Implementacija login, logout, register ruta i kontrolera
> - Određene rute dostupne samo autentifikovanim korisnicima (CREATE, UPDATE, DELETE)

> **Dokumentacija:**
> - Prateća dokumentacija sa slikama celog ekrana (uključujući datum)
> - Objašnjenje funkcionalnosti (isečci iz koda sa pojašnjenjem)
> - Obavezno koristiti dati template

---

## [Prvi domaći] Zahtevi za višu ocenu (izabrati najmanje 3)

> **Napredne funkcionalnosti:**
> - API rute za paginaciju i filtriranje
> - API ruta za promenu lozinke u slučaju zaborava
> - Implementacija najmanje 3 uloge u sistemu (npr. admin, ulogovan, neulogovan korisnik)
> - Upload fajlova
> - Keširanje podataka
> - Seeders, factory, resources za sve modele
> - Pretraga po kriterijumima
> - Eksport podataka (.csv, .ics, .pdf, ...)
> - Ruta koja koristi podatke sa javnog servisa

---

## [Drugi domaći] Minimalni zahtevi za veb aplikaciju (React)

> **Tehnologija:**
> - Dinamički veb sajt razvijen korišćenjem **ReactJS** biblioteke.
> - Verzije aplikacije prate se putem **Git-a**, uz minimum **10 smislenih komitova**.
> - Oba člana tima moraju biti kolaboratori sa sopstvenim komitovima.
> - Nije dozvoljeno komitovati gotov projekat i zatim menjati nazive funkcija/promenjivih ili naknadno dodavati komentare.

> **Repozitorijum:**
> - Kod mora biti postavljen na **GitHub**, **GitLab** ili **Bitbucket**.
> - Repozitorijum mora biti **public**.
> - Projekat mora biti povezan sa **Elab GitHub organizacijom**.

> **Struktura sajta:**
> - Minimum **3 stranice (komponente)** sa različitim sadržajem, npr.:
>   - Login stranica
>   - Početna stranica
>   - Galerija
>   - Kontakt stranica

> **Reusable komponente (najmanje 3):**
> - **Dugme**: Višenamenska komponenta za razne akcije sa različitim stilovima, ikonama i `onClick` funkcijama.
> - **Polje za unos**: Tekst, email, lozinka, broj; uključuje placeholder, validaciju i `onChange` rukovaoce.
> - **Kartica (Card)**: Grupisane informacije kao što su profil korisnika, proizvod, članak; sadrži sliku, naslov, opis, dugmad.
> - **Modalni prozor (Modal)**: Iskačući prozor za potvrde, obaveštenja, uređivanje podataka.

> **Stilizacija sajta:**
> - Dozvoljena upotreba **CSS-a**, **SCSS-a**, **Bootstrap-a** i drugih stilizacijskih rešenja.

> **Funkcionalnosti u JavaScript/JSX (najmanje 3):**
> - Korišćenje različitih JS/JSX funkcionalnosti (ne smeju biti iz skripte).

> **Obavezna upotreba React hooks:**
> - `useState`
> - `useEffect`
> - `useNavigate`

> **Rute:**
> - Implementacija odgovarajućih ruta za pristup svim delovima sajta (npr. preko `react-router-dom`).

> **Dokumentacija:**
> - Screenshots stranica sa opisima
> - Isečci koda i objašnjenja funkcionalnosti
> - Koristiti dati template za dokumentaciju

---

## [Drugi domaći] Zahtevi za višu ocenu (React)

> **Napredne funkcionalnosti:**
> - Implementirati **paginaciju i filtere** na stranici (oba)
> - Implementirati **Breadcrumbs navigaciju** (navigacija po hijerarhiji aplikacije)
> - **Povući podatke sa smislenog API-ja** i prikazati ih na stranici
> - Implementirati **minimum jednu custom React hook funkciju**

---

# [Seminarski rad] Dokumentacija aplikacije

## I deo – Dokumentacija projekta

> **Korisnički zahtev:**
> - Jasno specificiran i formulisan zahtev korisnika na osnovu problema koji aplikacija rešava.

> **Opis sistema:**
> - Opis karakterističnih slučajeva korišćenja (Use Case opisi).
> - Dijagrami slučajeva korišćenja.

> **Arhitektura aplikacije:**
> - Osnovni segmenti i komponente aplikacije.
> - Dijagram komponenti.
> - Način komunikacije između komponenti (frontend ↔ backend).
> - Povezivanje full-stack aplikacije i baze podataka.

> **Opis procesa:**
> - Dijagrami sekvenci za ključne slučajeve korišćenja.

> **Model podataka:**
> - Dijagram klasa ili PMOV model.
> - Struktura baze podataka (tabele, veze, tipovi podataka).

> **Specifikacija REST API-ja:**
> - **Naziv funkcije**
> - **Opis funkcije**
> - **Endpoint (URL pristupa)**
> - **HTTP metoda** (GET, POST, PUT, DELETE)
> - **HTTP zaglavlja**: Koja se šalju i njihovi opisi
> - **Ulazni parametri**: Format i opis
> - **Izlaz**: Format i primer rezultata
> - Preporučeni alati za dokumentaciju: **Swagger**, ili se može pozvati na stil sledećih API-jeva:
>   - [Twitter API](https://developer.twitter.com/en/docs/api-reference-index)
>   - [WordPress API](http://developer.wordpress.com/docs/api/)
>   - [Twilio API](http://www.twilio.com/docs/api/rest)

> **Opis korišćenih tehnologija:**
> - Kratak opis alata i okvira korišćenih za frontend, backend, bazu podataka i stilizaciju.

> **Korisničko uputstvo:**
> - Opis kroz screenshote aplikacije
> - Vodič kroz najčešće funkcionalnosti

> **Reprezentativni delovi koda:**
> - Isečci najvažnijeg koda uz objašnjenje.

> **GitHub repozitorijum:**
> - Link ka projektu
> - README fajl treba da sadrži:
>   - Opis funkcionalnosti
>   - Način instalacije i pokretanja projekta na lokalnoj mašini

---

## II deo – Implementacija aplikacije

> **Tehnologije:**
> - Backend (npr. Node.js, Express, Laravel, Django, Symfony)
> - Frontend (npr. ReactJS, VueJS, Angular)
> - Obavezna upotreba modernih okvira (framework-a) za obe strane

> **Minimalni zahtevi:**
> - Baza podataka i osnovne CRUD operacije (SELECT, INSERT, UPDATE, DELETE)
> - Najmanje **5 različitih tipova migracija**
> - Poziv **najmanje jednog javnog web servisa**
> - Kreiranje **najmanje četiri API rute**
> - Postojanje **tri korisničke uloge** (npr. administrator, ulogovani korisnik, gost)
> - Autentifikacija i upravljanje sesijom (login, logout, register)
> - Jedinstven dizajn sajta, poželjno uz korišćenje CSS/Bootstrap/SCSS
> - Implementacija **minimum tri dodatne funkcionalnosti**, npr.:
>   - Paginacija i filtriranje
>   - Izmena zaboravljene lozinke
>   - Upload fajlova
>   - Keširanje podataka
>   - Pretraga i sortiranje
>   - Eksport u `.csv`, `.pdf`, `.ics`, itd.

> **Zahtevi za višu ocenu:**
> - Ispunjeni minimalni zahtevi
> - Kvalitetan i jedinstven dizajn
> - Responzivan frontend (koristeći CSS, SCSS, Bootstrap itd.)
> - Implementacija specifičnih zahteva teme seminarskog rada
> - Poštovanje principa razvoja web aplikacija

> **Baza podataka:**
> - Minimum **4 međusobno povezane tabele**
> - Korišćenje **JOIN upita**
> - Korišćenje **MVC** šablona
> - Korišćenje savremenih verzija okvira (npr. Laravel 10, Symfony 6, Django 4 itd.)

> **Sigurnost aplikacije (minimum 2 kriterijuma):**
> - Enkripcija lozinke
> - Zaštita od SQL injection
> - Zaštita od XSS, CSRF, SSRF, IDOR i drugih napada

> **Napredna manipulacija bazom:**
> - Višestruki JOIN-ovi, agregacije, podupiti
> - Trigeri
> - Transakcije

> **Vizualizacija podataka (po izboru):**
> - Grafikoni uz pomoć npr. **Google Charts**
> - Mape uz pomoć npr. **Google Maps JavaScript API**

> **REST servisi:**
> - Minimum **4 funkcije** sa različitim HTTP metodama
> - Poštovanje **RESTful** principa (npr. nepostojanje stanja, odgovarajuće rute)
> - **Minimum 2 ugnježdene rute**, npr. `/users/{id}/posts`
> - Poziv **najmanje 2 javna REST web servisa** u skladu sa temom

---

## III deo – Verzionisanje koda

> **Git verzionisanje:**
> - Minimum **40 smislenih komitova**
> - Komitovi iz domaćih zadataka se takođe računaju
> - Obavezna kolaboracija oba člana na repozitorijumu
> - Zabranjeno je komitovati gotov projekat i naknadno praviti izmene da bi se generisali lažni komitovi

> **Repozitorijum:**
> - Javni (public) na GitHub/GitLab/Bitbucket
> - Projekat mora biti povezan sa Elab GitHub organizacijom putem GitHub Classroom-a
