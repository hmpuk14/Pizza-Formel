<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechnung</title>
    <style>
        body {
            font-family: "Work Sans";
            font-size: 22px;
            color: #333;
            height: 100%;
            position: relative;
        }
        .header {
            margin-bottom: 80px;
            background: #333333;
            color: whitesmoke;
        }
        .header-left {
            float: left;
            margin-left: 2rem;
        }
        .header-left h1 {
            margin-bottom: 0;
        }

        .header-left p {
            margin-top: 5px;
            font-size: 16px;
        }
        .header-right {
            float: right;
        }
        .header-right img {
            margin-top: -10px;
        }
        .clearfix::after {
            content: "";
            display: table;
            clear: both;
        }
        .user-details {
            margin-bottom: 200px;
        }
        .content {
            max-width: 95%;
            margin: 0 auto;
            overflow: hidden;
        }
        .left-col, .right-col {
            float: left;
            width: 50%;
            box-sizing: border-box;
        }
        .right-col {
            text-align: right;
        }
        p {
            margin: 0;
            padding: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th, table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .price-column {
            text-align: right;
        }
        .price-header {
            text-align: right;
            width: 80px;
        }
        tfoot td {
            font-weight: bold;
        }
        .bezahlung {
            margin-top: 20px;
            text-align: center;
        }
        .footer {
            position: absolute;
            text-align: center;
            bottom: 0;
            width: 100%;
            height: 50px;
            color: rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<header>
        <div class="header clearfix">
            <div class="header-left">
                <h1>Pizza-Formel</h1>
                <p>Teigallee 7, 1110 Wien</p>
            </div>
            <div class="header-right">
                <img src="{{ public_path('images/logo.png') }}" alt="Logo" style="width: 150px; height: 150px;">
            </div>
        </div>
</header>
<body>
<div class="user-details">
    <div class="left-col">
        <p>{{ $invoice['first_name'] }} {{ $invoice['last_name'] }}</p>
        <p>{{ $invoice['street'] }}</p>
        <p>{{ $invoice['postal_code'] }} {{ $invoice['city'] }}</p>
    </div>
    <div class="right-col">
        <p>Rechnungsnummer: {{ $invoice['invoice_id'] }}</p>
        <p>Kundennummer: {{ $invoice['user_id'] }}</p>
        <p>Datum: {{ date('d.m.Y') }}</p>
    </div>
</div>
<div class="content">
    <table>
        <thead>
        <tr>
            <th>Menge</th>
            <th>Zutaten</th>
            <th class="price-header">Preis</th>
        </tr>
        </thead>
        <tbody>
        @foreach($invoice['pizzas'] as $pizza)
            <tr>
                <td>{{ $pizza->pizza_quantity }}</td>
                @php
                    $toppings = json_decode($pizza->all_toppings);
                @endphp

                <td>{{ implode(', ', $toppings) }}</td>

                <td class="price-column">{{ number_format($pizza->price_pizza, 2) }}</td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <td colspan="2" style="border-top: 2px solid black;">Gesamtpreis</td>
            <td class="price-column" style="border-top: 2px solid black;">{{ number_format($invoice['order']->total_price, 2) }}
            </td>
        </tr>
        </tfoot>
    </table>
    <div class="bezahlung">
        <h3>Bitte bezahle den Betrag direkt beim Zusteller!</h3>
    </div>
</div>
<div class="footer">
        <p>Wir sind ein Pizza-Lieferdienst mit Online-Bestellservice!<br>
           Jederzeit bemühen wir uns um beste Qualität und schnelle Zustellung!</p>
</div>
</body>
</html>
