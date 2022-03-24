<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## O projekcie:

Projekt działający umiesciłem na serwerze i działa pod adresem: copentro.piotrsom.beep.pl
Zdecydowałem się zaprogramować opcję z rejestracją i logowaniem.
Skorzystałem z frameworków boostrap oraz jquery. Uzyłem równiez zamiennika dla okien dialogowych Sweetalert2.
Przy wyświetlaniu kodów uzyłem relacji zawartych w modelach.
Usuwanie uzytkownika usuwa równiez jego kody za pomocą odpowiednich zapisów w migracji.
Całą logikę związaną z zapisem oraz usuwaniem kodów zawarłem w serwisie CodeService.
Zgodnie z wytycznymi wykonałem więcej ni jeden commit (widoczne w pliku readme).
Zasada działania:
Po zalogowaniu pokazuje się strona z kodami, w razie ich braku jest komunikat o ich braku.
Całe menu zawarłem jako dropdown w navbarze po prawej stronie.
Przy dodawaniu kodów (uzytkownik deklaruje ilość od 1 do 10) następuje walidacja
(na początku w js a później sprawdzanie czy kod nie występuje w bazie) i jeśli jej wynik jest poprawny kody zostają zapisane oraz wyświetla się komunikat.
Przy usuwaniu kodów nalezy wpisać kody po przecinku (zabezpieczenie przed wysyłką pustego pola)
jeśli chociaz jeden kod nie jest zgodny wyświetla się komunikat jakie kody nie występują w bazie.
Przy wybraniu opcji 'usuń konto' pojawia się komunikat potwierdzający a jeśli uytkownik zatwierdzi konto
i wszystkie kody uytkownika zostają usunięte oraz następuje przekierowanie na stronę powitalną.
