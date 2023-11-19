<?php


namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $categories = Category::whereNotNull('fa_name')
            ->with('toppings')
            ->get(['id','category_name', 'fa_name', 'price']);
        $lambdaPrice = Category::where('category_name', 'Lambda')->first()->price;
        return view('welcome', compact('categories', 'lambdaPrice'));
    }
}
