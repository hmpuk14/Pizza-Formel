@extends('layouts.app')

@section('content')
    <div class="section section-2">
        <div class="container-fluid">
            <!-- Überschrift -->
            <h1 class="section-title my-s-custom-margin">Belege Deine Pizza selbst!</h1>
            <h3 class="section-title my-ss-custom-margin">Grundpreis Pizza: \( \lambda \)= {{ $lambdaPrice }} €</h3>
            <div class="row custom-center-row">
                <!-- In der Datenbank-Tabelle categories ist auch der Fixpreis Pizza damit man ihn ändern kann, er hat kein Bild -->
                @if($categories->isNotEmpty())
                    <!-- Login Prüfung -->
                    <div id="isLoggedIn" data-is-logged-in="{{ Auth::check() ? 'true' : 'false' }}"></div>
                    <!-- Formular, damit die Bestellung zusammengefasst werden kann -->
                    <form action="{{ route('pizza.store') }}" method="POST" id="pizzaForm">
                        @csrf
                        <!-- Kategorie-Überschriften aus der Datenbank mit Font Awsome Bild -->
                        @foreach($categories as $category)
                            <div class="btn-group custom-group">
                                <button type="button" class="btn btn-default dropdown-toggle mein-button-stil" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="{{ $category->fa_name }}"></i>
                                    {{ $category->category_name }}
                                    <span class="caret"></span>
                                </button>
                                <!-- Zutaten mit Checkboxen und Preisen -->
                                <div class="dropdown-menu">
                                    @if($category->toppings->isNotEmpty())
                                        @foreach($category->toppings as $topping)
                                            <div class="form-check">
                                                <input type="checkbox" name="toppings[]" value="{{ $topping->id }}" class="form-check-input topping-checkbox" id="topping{{ $topping->id }}" data-price="{{ $category->price }}">
                                                <label class="form-check-label d-flex justify-content-between" for="topping{{ $topping->id }}">
                                                    <div class="name">{{ $topping->topping_name }}</div>
                                                    <div class="price-text">{{ number_format($category->price, 2, ',', '.') }} €</div>
                                                </label>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        @endforeach
                        <!-- Zutaten-Bilder -->
                        <div class="image-display-area">
                            <div class="image-container">
                                @foreach($categories as $category)
                                    @if($category->toppings->isNotEmpty())
                                        @foreach($category->toppings as $topping)
                                            <!-- Hier werden die Bilder eingefügt, aber zunächst nicht angezeigt -->
                                            <img src="{{ asset($topping->picture_path) }}"
                                                 class="topping-img" id="img{{ $topping->id }}"
                                                 alt="{{ $topping->topping_name }}"
                                                 style="display:none;" />
                                        @endforeach
                                    @endif
                                @endforeach
                            </div>
                        </div>
                            <!-- Tooltip-Pizza Formel -->
                            <div class="formula-container" tabindex="0" data-toggle="tooltip" data-placement="top"
                                 title="Preis der Pizza bestehend aus:<br>
                                        λ - Fix-Preis für Pizzateig und Tomatensauce<br>
                                        pi - Preis der jeweiligen Zutaten-Kategorie<br>">
                                        \( \text{Pizza-Formel} = \lambda + \sum_{i=1}^{n} p_i = \)
                            </div>
                            <!-- Berechnung Pizza-Preis -->
                                <div class="calculation-container formula-container" id="result" data-lambda="{{ $lambdaPrice }}">
                                    <span id="calculation-formula" style="display: none;">\( \lambda \) + (keine Zutaten ausgewählt)</span>
                                    <input type="hidden" name="price" id="priceInput">
                                    <span id="result-formula"> ?&nbsp;€ </span>
                                </div>
                        <!-- Buttons: Pizza erstellen und Zurücksetzen der Mengen -->
                        <button type="submit" class="btn btn-primary mt-2 mein-button-stil">Pizza erstellen</button>
                        <button type="button" onclick="clearSelection()" class="btn btn-primary mt-2 mein-button-stil">zurücksetzen</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/belegen.js') }}"></script>
@endsection
