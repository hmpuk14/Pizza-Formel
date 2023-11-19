<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Order;
use App\Models\Pizza;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // Menge der bestellten Pizzas von 0-20, Preis muss min. 0 sein
        $request->validate([
            'pizza_quantity.*' => 'required|integer|min:0|max:20',
            'total_price' => 'required|numeric|min:0',
        ]);

        $totalPrice = $request->input('total_price');
        $pizzas = $request->session()->get('pizzas', []);
        $quantities = $request->input('pizza_quantity', []);
        $prices = $request->input('pizza_price', []);

        if ($totalPrice <= 0) {
            return redirect()->route('home')->with('error', 'Die Bestellmenge muss größer als 0 sein!');
        }

        // Bestellung in der Datenbank speichern
        $order = new Order();
        $order->user_id = Auth::id();
        $order->order_date = now();
        $order->total_price = $totalPrice;
        $order->save();

        $savedPizzas = [];  // Liste der gespeicherten Pizzen

        // Pizzas durchgehen und in der Datenbank speichern
        foreach ($pizzas as $index => $pizza) {
            $quantity = $quantities[$index] ?? 0;
            $price = $prices[$index] ?? 0;

            if ($quantity > 0) {
                $pizzaModel = new Pizza();
                $pizzaModel->order_id = $order->id;
                $pizzaModel->user_id = Auth::id();
                $pizzaModel->all_toppings = json_encode($pizza['toppings'] ?? []);
                $pizzaModel->pizza_quantity = $quantity;
                $pizzaModel->price_pizza = $price;
                $pizzaModel->save();

                $savedPizzas[] = $pizzaModel;  // Pizzas zur Liste hinzufügen
            }
        }
                // Pfad für Rechnung PDF erstellen
                $pdfPath = 'invoices/invoice_' . $order->id . '.pdf';

                // Rechnung in Datenbank speichern
                $invoice = new Invoice();
                $invoice->invoice_date = now();
                $invoice->total_amount = $totalPrice;
                $invoice->order_id = $order->id;
                $invoice->pdf_path = $pdfPath;  // Setzen Sie den Pfad vor dem Speichern.
                $invoice->save();

                // Rechnungskopf erstellen
                $invoiceData = [
                    'first_name' => Auth::user()->first_name,
                    'last_name' => Auth::user()->last_name,
                    'street' => Auth::user()->street,
                    'postal_code' => Auth::user()->postal_code,
                    'city' => Auth::user()->city,
                    'order' => $order,
                    'user_id' => Auth::id(),
                    'pizzas' => $savedPizzas,
                    'invoice_id' => $invoice->id  // Jetzt hat $invoice eine ID.
                 ];

        // PDF erstellen
        $pdf = PDF::loadView('rechnung', ['invoice' => $invoiceData]);

        // PDF speichern
        Storage::put($pdfPath, $pdf->output());

        //pdf_path in der Invoice aktualisieren
        $invoice->pdf_path = $pdfPath;
        $invoice->save();

        // Pizzas aus der Session löschen
        $request->session()->forget('pizzas');

        // Weiterleitung mit Erfolgsmeldung
        return redirect()->route('zustellung', ['orderId' => $order->id]);
    }

    public function zustellung($orderId)
    {
        $order = Order::find($orderId);

        if(!$order) {
            return redirect()->route('home')->with('error', 'Bestellung nicht gefunden.');
        }

        return view('zustellung', ['orderId' => $orderId]);
    }
    public function showPdf($orderId)
    {
        // Rechnungsdaten des eingeloggten Users
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('home')->with('error', 'Bitte zuerst einloggen.');
        }

        $order = Order::where('user_id', $user->id)->where('id', $orderId)->first();

        if (!$order) {
            return redirect()->route('home')->with('error', 'Keine Bestellungen gefunden.');
        }
        $invoice = Invoice::where('order_id', $order->id)->first();

        if ($invoice && Storage::exists($invoice->pdf_path)) {
            return Storage::response($invoice->pdf_path);
        } else {
            return redirect()->route('home')->with('error', 'Keine Rechnung gefunden.');
        }
    }
}
