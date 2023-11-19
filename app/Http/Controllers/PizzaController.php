<?php


namespace App\Http\Controllers;

use App\Models\Topping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PizzaController extends Controller
{

    public function index(Request $request)
    {
        // Hier wird $pizzas aus der Session abgerufen
        $pizzas = $request->session()->get('pizzas', []);

        // Weitere Logik für die Ansicht oder Datenverarbeitung

        return view('pizza', ['pizzas' => $pizzas]);
    }

    public function store(Request $request)
    {
        // Überprüfen, ob der Benutzer eingeloggt ist
        if (!Auth::check()) {
            // Umleitung zur Login-Seite, falls der Benutzer nicht eingeloggt ist
            return redirect('/login');
        }
        $toppingIDs = $request->input('toppings');
        $price = $request->input('price');

        // Überprüfen, ob keine Checkboxen ausgewählt sind
        if (empty($toppingIDs)) {
            return redirect('/home')->with('error', 'Bitte wähle Zutaten aus!');
        }

        // Abrufen der Topping-Namen anhand der IDs aus der Datenbank
        $toppingNames = Topping::whereIn('id', $toppingIDs)->pluck('topping_name');

        // Abrufen der aktuellen Liste der Pizzen aus der Session
        $pizzas = $request->session()->get('pizzas', []);

        // Hinzufügen der neuen Pizza zur Liste
        $pizzas[] = [
            'toppings' => $toppingNames,
            'price' => $price,
        ];

        // Aktualisieren der Pizzaliste in der Session
        $request->session()->put('pizzas', $pizzas);

        // Return the view with the data
        return view('pizza', [
            'toppings' => $toppingNames,
            'price' => $price,
        ]);
    }
}
