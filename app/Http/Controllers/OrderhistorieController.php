<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Pizza;
use Auth;

class OrderhistorieController extends Controller
{
    public function bestellung(Request $request)
    {
        // Zuerst prüfen, ob der eingeloggte Benutzer Bestellungen hat
        if (!Auth::user()->orders()->exists()) {
            return redirect('/home')->with('error', 'Sie haben noch keine Bestellung aufgegeben. Wählen Sie den Menüpunkt "Pizza belegen".');
        }

        $orderDate = $request->input('order_date');
        $query = Auth::user()->orders();

        // Falls es ein Datum gibt (Suche wurde durchgeführt)
        if($orderDate) {
            $dateParts = explode('-', $orderDate);
            $year = $dateParts[0];
            $month = $dateParts[1];

            $query->whereMonth('order_date', $month)
                ->whereYear('order_date', $year);
        }

        $orders = $query->orderBy('order_date', 'desc')->take(50)->get();

        // Wenn es ein Datum gibt, aber keine Übereinstimmungen
        if ($orderDate && $orders->isEmpty()) {
            return view('bestellung', ['error' => 'Keine Bestellung in diesem Monat/Jahr.', 'orders' => collect([])]);
        }

        $latest_order = $orders->first();

        // Pizzas für jede Bestellung abrufen
        $all_pizzas = [];
        foreach($orders as $order) {
            $pizzas = Pizza::where('order_id', $order->id)->get();
            $all_pizzas[$order->id] = $pizzas;
        }

        return view('bestellung', [
            'latest_order' => $latest_order,
            'orders' => $orders,
            'all_pizzas' => $all_pizzas
        ]);
    }
}
