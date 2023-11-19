# Web43 - Pizza-Formel 

Pizza-Formel ist eine Web-Anwendung mit Datenbankanbindung. Das Projekt ist in Laravel erstellt worden. 
Es beinhaltet den Quellcode für die Webseite einer Pizzeria, die sich ausschließlich auf 
den Zustelldienst konzentriert. Die Anwendung bietet einen Kundenbereich zur Verwaltung von Bestellungen 
sowie einen internen Bereich für die Angestellten der Pizzeria zur Verwaltung und Überwachung von 
Zutaten, Preisen, Bestellungen und Rechnungen.

## Funktionen

- **Kundenbereich:**
    - Kunden können eigene Pizzen kreieren, indem sie Zutaten auswählen.
    - Bestellungen werden aufgegeben 
    - Übersicht über alle bisher getätigte Bestellungen mit Suchfunktion nach Monat und Jahr.
    - Generierung von Rechnungen als PDF zum Ausdrucken.

- **Angestelltenbereich:**
    - Vergabe von Admin- oder Kundenrechten an Benutzer.
    - Einsicht in den kompletten Lagerstand.
    - Anpassung von Mengen und Preisen im System.

## Voraussetzungen

- PHP >= [8.2.4]
- Composer
- Ein Webserver wie Apache (XAMPP) und myphpAdmin
- Eine Datenbank, die von Laravel unterstützt wird (z.B. MySQL)
- Node.js und npm 

## Installation

Schritt für Schirtt Anleitung um das Projekt Pizza-Formel zu installieren:

1. **XAMPP installieren**

    ```
    XAMPP installieren 
    Node.js installieren    
    ```

2. **Projektordner erstellen**

    ```
    im Verzeichnis xampp/htdocs in der Console folgenden 
    Befehl zur Anlage des Projekts absetzen:
    composer create-project laravel/laravel web43 "8.*"    
    ```
3. **weitere Installationen**
   # Installiere Laravel UI direkt im Projektordner
    composer require laravel/ui

    # Installiere Bootstrap mit Authentifizierung direkt im Projektordner
    php artisan ui bootstrap --auth

5. **Konfiguration der Datenbank**

   Kopiere das Projekt ins web43 Verzeichnis.
   Starte XAMPP und erstelle eine neue Datenbank namens pizza_formel.
   Danach suche deine .env Datei im Hauptverzeichnis deines Laravel-Projekts
   und konfiguriere die Datenbankverbindung wie folgt:
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=pizza_formel
    DB_USERNAME=DEINUSERNAME
    DB_PASSWORD=DEINPASSWORT
    ```   
   Wegen der Bilder musst du ev. noch die GD-Bibliothek aktivieren.

    Öffne die php.ini-Datei, die sich normalerweise im php-Verzeichnis befindet.
    Such die Zeile, die mit ;extension=gd beginnt.
    Entferne das Semikolon ;, um die Erweiterung zu aktivieren.
    Speichere die php.ini-Datei und starte Apache-Server über das XAMPP-Control-Panel neu.

4. **Datenbank einrichten**

    Nun die Migrationen und Seeder ausführen, um die Datenbank zu befüllen:

    # Führe die Migrationen aus
    php artisan migrate

    # Führe die Seeder aus
    php artisan db:seed    

5. **Kompilieren**

    ```
    npm run dev
    ```
6. **Lokalen Entwicklungsserver starten**

    ```
    php artisan serve
    ```

   Danach sollte die Anwendung unter `http://localhost:8000` verfügbar sein.


# LARAVEL ORIGINAL README:
    
   
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
