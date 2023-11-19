@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="ueberschrift">
            <h1>Lagerstand-Verwaltung</h1>
        </div>
    </div>
    <div class="container">
        <form action="{{ route('update.inventory') }}" method="POST" id="lagerstandForm" novalidate>
            @csrf
            @foreach($categories as $category)
            <div class="row justify-content-center mt-5">
                @if($category->id != 7)
                    <div class="col-md-2 text-decoration-underline text-center">
                        <h3>Menge</h3>
                    </div>
                    <div class="col-md-2 text-decoration-underline text-center">
                        <h3>Mengen Änderung</h3>
                    </div>
                    <div class="col-md-2 text-decoration-underline text-center">
                        <h3>{{ $category->category_name }}</h3>
                    </div>
                    <div class="col-md-2 text-decoration-underline text-center">
                        <h3>Preis</h3>
                    </div>
                @endif
            </div>
            @if($category->id != 7)
                @foreach($category->toppings as $topping)
                    <div class="row justify-content-center">
                        <div class="col-md-2">
                            <span style="{{ $topping->quantity_gram <= 250 ? 'color: #dc3545;' : ($topping->quantity_gram <= 500 ? 'color: #f8bb86;' : '') }}">
                                {{ $topping->quantity_gram }}
                            </span>
                        </div>
                        <div class="col-md-2">
                            <input type="number" placeholder="Neue Menge" class="form-control" name="update_gram[{{ $topping->id }}]">
                        </div>
                        <div class="col-md-2">
                            {{ $topping->topping_name }}
                        </div>
                        <div class="col-md-2">
                            {{ $category->price }}
                        </div>
                    </div>
                @endforeach
            @endif
        @endforeach
            <div class="col-md-12 mt-5 text-decoration-underline text-center">
                <h3>Grundpreis/Kategoriepreis ändern</h3>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-3 text-center font-weight-bold">
                    Lambda Preis (Teig+Sauce):
                </div>
                <div class="col-md-1">
                    {{ $category->price }}
                </div>
                <div class="col-md-2">
                    <input type="number" step="0.01" placeholder="Neuer Preis" class="form-control" name="update_lambda_price[{{ $category->id }}]">
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-4">
                    <div class="inventory-dropdown">
                        <select class="form-control custom-select" name="new_category">
                            <option value="">Kategorie auswählen</option> <!-- "disabled" entfernt -->
                            <option value="Gemüse 1">Gemüse 1</option>
                            <option value="Gemüse 2">Gemüse 2</option>
                            <option value="Extras">Extras</option>
                            <option value="Käse">Käse</option>
                            <option value="Fisch">Fisch</option>
                            <option value="Fleisch">Fleisch</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <input type="number" step="0.01" placeholder="Neuer Preis" class="form-control" id="dishandy" name="new_price">
                </div>
            </div>
        </form>
            <button type="button" class="btn btn-primary mt-5 mein-button-stil" id="confirmModalButton">
            Änderungen speichern
            </button>
    </div>
    <!-- Script-Einbindungen -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/lagerstand.js') }}"></script>
@endsection
