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
