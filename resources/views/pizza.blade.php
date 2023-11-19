@extends('layouts.app')

@section('content')
    <div class="container my-container">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('order.store') }}" method="POST" id="pizzaForm">
            @csrf
            <div class="row mt-3">
                @php
                    $totalPrice = 0; // Variable zur Berechnung der Gesamtsumme initialisieren
                @endphp
                @foreach(session('pizzas', []) as $index => $_pizza)
                    <div class="col-md-2 col-sm-12 mein-s-prim pizza">
                        <div class="btn-group btn-group-justified">
                            <input type="number" id="quantity{{ $index }}" name="pizza_quantity[{{ $index }}]" value="1" min="0" max="20" class="quantity-input">
                            <div style="display: flex; flex-direction: column;">
                                <button type="button" onclick="increase({{ $index }})" class="increase-button">+</button>
                                <button type="button" onclick="decrease({{ $index }})" class="increase-button">-</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mein-s-sec">
                    <span>Pizza mit
                        @foreach($_pizza['toppings'] as $toppingIndex => $topping)
                            {{ $topping }}{{ $toppingIndex < count($_pizza['toppings']) - 1 ? ',' : '' }}
                        @endforeach
                    </span><p></p>
                    </div>
                    <div class="col-md-4 mein-s-ter">
                        <span class="pizza-price" data-price="{{ $_pizza['price'] }}" data-index="{{ $index }}">Preis {{ number_format($_pizza['price'], 2) }} €&nbsp;</span>
                        <input type="hidden" name="pizza_price[{{ $index }}]" value="{{ $_pizza['price'] }}" data-index="{{ $index }}" class="pizza-price-input">
                    </div>
                    @php
                        $totalPrice += $_pizza['price'];
                    @endphp
                @endforeach
            </div>
            <div class="row">
                <!-- Anzeige der Gesamtsumme -->
                <div class="col-lg-4 custom-offset text-lg-right">
                    <!-- Strich unter dem Gesamtpreis -->
                    <hr>
                    <span id="gespreis">Gesamtpreis: {{ number_format($totalPrice, 2) }} €</span>
                    <input type="hidden" id="total_price" name="total_price" value="{{ $totalPrice }}">
                </div>
            </div>
            <div class="row">
                <!-- freier Text für Sonderwünsche -->
                <div class="container-fluid mein-text">
                    <div class="row meine-textzeile">
                        <div class="col-md-7">
                            <div class="form-group mein-text">
                                <textarea id="sonderwunsch" class="form-control"name="textsonderwunsch"  rows="7" placeholder="Sonderwünsche"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- Buttons -->
            <div class="row d-flex flex-wrap">
                <div class="col-md-6" style="order: 2;">
                    <button type="submit" id="bestellenButton" class="btn btn-primary mt-5 mein-button-stil">verbindlich bestellen</button>
                </div>
        </form>
                <div class="col-md-6" style="order: 1;">
                    <button type="button" id="weiterePizzaButton" class="btn btn-primary mt-5 mein-button-stil">weitere Pizza erstellen</button>
                </div>
            </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/pizza.js') }}"></script>
@endsection
