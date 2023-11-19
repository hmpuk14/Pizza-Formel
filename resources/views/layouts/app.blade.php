<!--  Style html und Navigation -->
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pizza Formel') }}</title>

    <!-- Scripts -->
    <!-- Java-Script -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- MathJax für die Einbindung der Formel -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/favicon_logo.png') }}" sizes="32x32">
    <!-- Font Awsome für die Einbindung der Bilder der Kategorien -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<div id="app">
    <!--  im Header befindet sich die Navigation-->
    <header>
        <nav class="navbar navbar-expand-md">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/Logo freigestellt.svg') }}" alt="Logo" id="nav-logo">
                    <span style="color: whitesmoke; font-family: Work Sans; font-size: 22px;">{{ config('app.custom_name', 'Pizza-Formel') }}</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link custom-link" href="{{ route('login') }}"style="color: whitesmoke; font-family: Work Sans; font-size: 22px;">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item custom">
                                    <a class="nav-link custom-link" href="{{ route('register') }}"style="color: whitesmoke; font-family: Work Sans; font-size: 22px;">{{ __('Registrierung') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link custom-link"
                                   href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                   style="color: whitesmoke; font-family: Work Sans; font-size: 22px;">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                            @auth
                                @if(!auth()->user()->is_admin) <!-- Überprüft, ob der eingeloggte Benutzer kein Admin ist -->
                                <li class="nav-item custom">
                                    <a class="nav-link custom-link" href="{{ url('http://127.0.0.1:8000/#belegen') }}"style="color: whitesmoke; font-family: Work Sans; font-size: 22px;">{{ __('Pizza belegen') }}</a>
                                </li>
                                <li class="nav-item custom">
                                    <a class="nav-link custom-link" href="{{ route('bestellung') }}" style="color: whitesmoke; font-family: Work Sans; font-size: 22px;">Bestellungen</a>
                                </li>
                                @else <!-- Wenn der Benutzer ein Admin ist -->
                                <li class="nav-item custom">
                                    <a class="nav-link custom-link" href="{{ route('lagerstand.index') }}" style="color: whitesmoke; font-family: Work Sans; font-size: 22px;">Lagerstand</a>
                                </li>
                                <li class="nav-item custom">
                                    <a class="nav-link custom-link" href="{{ route('admin.dashboard') }}" style="color: whitesmoke; font-family: Work Sans; font-size: 22px;">Admin</a>
                                </li>
                                @endif
                            @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Inhalt der jeweiligen blades wird hier gezeigt-->
    <main class="container-fluid {{ $mainClass ?? '' }}">
    <!-- hier kommen Inhalte rein -->
        @yield('content')
    </main>
    <footer>
        <div class="footer">
            <div class="footer-content">
                &copy; 2023 Pizza-Formel
            </div>
            <div class="footer-content">
                Online-Bestellung | Lieferservice
            </div>
        </div>
        @section('footer')
    </footer>
</div>
<script type="text/javascript">
    if (window.performance && window.performance.navigation.type === window.performance.navigation.TYPE_BACK_FORWARD) {
        window.location.href = '/';  // leitet den Benutzer zur Startseite weiter
    }
</script>
</body>
</html>



