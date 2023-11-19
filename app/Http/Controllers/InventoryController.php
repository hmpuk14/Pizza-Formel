<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Topping;

class InventoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('toppings')->get();
        return view('lagerstand', compact('categories'));
    }

    public function updateInventory(Request $request)
    {
        // Mengenänderungen aktualisieren
        $updatedGrams = $request->get('update_gram', []);
        foreach ($updatedGrams as $toppingId => $newGram)
        {
            $topping = Topping::find($toppingId);
            if ($topping)
            {
                $topping->quantity_gram = $newGram;
                $topping->save();
            }
        }

        // Grundpreis aktualisieren
        $updatedPrice = $request->get('update_lambda_price', []);
        foreach ($updatedPrice as $categoryId => $newPrice)
        {
            $category = Category::find($categoryId);
            if ($category)
            {
                $category->price = $newPrice;
                $category->save();
            }
        }

        // Neuen Kategoriepreis aktualisieren
        $newCategoryName = $request->get('new_category');
        $newCategoryPrice = $request->get('new_price');
        if ($newCategoryName && $newCategoryPrice) {
            $categoryToUpdate = Category::where('category_name', $newCategoryName)->first();
            if ($categoryToUpdate) {
                $categoryToUpdate->price = $newCategoryPrice;
                $categoryToUpdate->save();
            }
        }

        return redirect()->route('home')->with('success', 'Datenbank erfolgreich aktualisiert!');
    }
}
