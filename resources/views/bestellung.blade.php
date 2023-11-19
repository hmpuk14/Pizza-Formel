@extends('layouts.app')

@section('content')
    <div class="containter">
        <div class="ueberschrift">
            <h1>Deine Bestellungen</h1>
        </div>
        <form method="GET" action="{{ route('bestellung') }}">
            <div class="d-flex align-items-center justify-content-center">
                <!-- ausgewähltes Datum setzen, wenn es vorhanden ist -->
                <input type="month" class="month-input" name="order_date" value="{{ request('order_date', '') }}">
                <button type="submit" class="btn btn-primary mt-2 mein-button-stil">Suchen</button>
            </div>
        </form>
        <!-- s. OrderhistorieController gibt Meldung aus, wenn keine Bestellung zur Suchanfrage gefunden wird -->
        <div class="mb-4"></div>
        @if(isset($error))
            <div class="error">
                {{ $error }}
            </div>
        @endif
    </div>
@foreach($orders as $order)
    <div class="container">
        <div class="order">
            <div class="latest-order">
                <br><strong>Bestellnr.: {{ $order->id }}</strong><br>
                <p>Bestellung aufgegeben am {{ \Carbon\Carbon::parse($order->order_date)->format('d.m.Y') }} um {{ \Carbon\Carbon::parse($order->order_date)->format('H:i:s') }}</p>
            </div>
        </div>
        @foreach($all_pizzas[$order->id] as $pizza)
            <div class="row">
                <div class="col-md-4" id="eins">
                    {{ $pizza->pizza_quantity }} mal
                </div>
                <div class="col-md-4 d-flex align-items-center justify-content-center">
                    Pizza mit
                    @php
                        $toppings = json_decode($pizza->all_toppings, true);
                    @endphp
                    @foreach($toppings as $toppingIndex => $topping)
                        {{ $topping }}{{ $toppingIndex < count($toppings) - 1 ? ',' : '' }}
                    @endforeach
                </div>
                <div class="col-md-4" id="zwei">
                    {{ number_format($pizza->price_pizza, 2) }} €
                </div>
                <div class="mb-4"></div>
            </div>
        @endforeach
        <div class="text-center mt-3 mb-3" id="result-formula" >
            Gesamtpreis: {{ number_format($order->total_price, 2) }} €
        </div>
        <div class="text-center">
            <button onclick="openInvoicePrintWindow('{{ route('invoice.pdf', $order->id) }}');" class="btn btn-primary mt-3 mein-button-stil">Rechnung PDF</button>
        </div>
        <hr class="mx-auto mb-0" style="width: 50%;">
    </div>
@endforeach
    <script>
        function openInvoicePrintWindow(url) {
            window.open(url, '_blank');
        }
    </script>
@endsection
