<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToppingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('toppings')->insert([
            'category_id' => 1,
            'topping_name' => 'Champignon',
            'picture_path' => 'assets/champignon.svg',
            'picture_name' => 'champignon',
            'quantity_gram' => 3500,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('toppings')->insert([
            'category_id' => 1,
            'topping_name' => 'Kapern',
            'picture_path' => 'assets/kapern.svg',
            'picture_name' => 'kapern',
            'quantity_gram' => 240,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('toppings')->insert([
            'category_id' => 1,
            'topping_name' => 'Mais',
            'picture_path' => 'assets/mais.svg',
            'picture_name' => 'mais',
            'quantity_gram' => 732,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('toppings')->insert([
            'category_id' => 1,
            'topping_name' => 'Zwiebel',
            'picture_path' => 'assets/zwiebel.svg',
            'picture_name' => 'zwiebel',
            'quantity_gram' => 12000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('toppings')->insert([
            'category_id' => 2,
            'topping_name' => 'Artischocken',
            'picture_path' => 'assets/artischocken.svg',
            'picture_name' => 'artischocken',
            'quantity_gram' => 10000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('toppings')->insert([
            'category_id' => 2,
            'topping_name' => 'Brokkoli',
            'picture_path' => 'assets/brokkoli.svg',
            'picture_name' => 'brokkoli',
            'quantity_gram' => 500,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('toppings')->insert([
            'category_id' => 2,
            'topping_name' => 'Pfefferoni',
            'picture_path' => 'assets/pfefferoni.svg',
            'picture_name' => 'pfefferoni',
            'quantity_gram' => 780,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('toppings')->insert([
            'category_id' => 2,
            'topping_name' => 'Spinat',
            'picture_path' => 'assets/spinat.svg',
            'picture_name' => 'spinat',
            'quantity_gram' => 1225,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('toppings')->insert([
            'category_id' => 3,
            'topping_name' => 'Ananas',
            'picture_path' => 'assets/ananas.svg',
            'picture_name' => 'ananas',
            'quantity_gram' => 75,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('toppings')->insert([
            'category_id' => 3,
            'topping_name' => 'Ei',
            'picture_path' => 'assets/ei.svg',
            'picture_name' => 'ei',
            'quantity_gram' => 2137,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('toppings')->insert([
            'category_id' => 3,
            'topping_name' => 'Oliven',
            'picture_path' => 'assets/oliven.svg',
            'picture_name' => 'oliven',
            'quantity_gram' => 842,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('toppings')->insert([
            'category_id' => 3,
            'topping_name' => 'Ruccola',
            'picture_path' => 'assets/ruccola.svg',
            'picture_name' => 'ruccola',
            'quantity_gram' => 331,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('toppings')->insert([
            'category_id' => 4,
            'topping_name' => 'Gorgonzola',
            'picture_path' => 'assets/gorgonzola.svg',
            'picture_name' => 'gorgonzola',
            'quantity_gram' => 5720,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('toppings')->insert([
            'category_id' => 4,
            'topping_name' => 'Mozzarella',
            'picture_path' => 'assets/mozzarella.svg',
            'picture_name' => 'mozzarella',
            'quantity_gram' => 6831,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('toppings')->insert([
            'category_id' => 4,
            'topping_name' => 'Pizzakäse',
            'picture_path' => 'assets/pizzakaese.svg',
            'picture_name' => 'pizzakaese',
            'quantity_gram' => 3580,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('toppings')->insert([
            'category_id' => 4,
            'topping_name' => 'Schafskäse',
            'picture_path' => 'assets/schafskaese.svg',
            'picture_name' => 'schafskaese',
            'quantity_gram' => 2340,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('toppings')->insert([
            'category_id' => 5,
            'topping_name' => 'Muscheln',
            'picture_path' => 'assets/muscheln.svg',
            'picture_name' => 'muscheln',
            'quantity_gram' => 1745,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('toppings')->insert([
            'category_id' => 5,
            'topping_name' => 'Sardellen',
            'picture_path' => 'assets/sardellen.svg',
            'picture_name' => 'sardellen',
            'quantity_gram' => 790,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('toppings')->insert([
            'category_id' => 5,
            'topping_name' => 'Schrimps',
            'picture_path' => 'assets/schrimps.svg',
            'picture_name' => 'schrimps',
            'quantity_gram' => 3712,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('toppings')->insert([
            'category_id' => 5,
            'topping_name' => 'Thunfisch',
            'picture_path' => 'assets/thunfisch.svg',
            'picture_name' => 'thunfisch',
            'quantity_gram' => 4245,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('toppings')->insert([
            'category_id' => 6,
            'topping_name' => 'Prosciutto',
            'picture_path' => 'assets/prosciutto.svg',
            'picture_name' => 'prosciutto',
            'quantity_gram' => 800,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('toppings')->insert([
            'category_id' => 6,
            'topping_name' => 'Salami',
            'picture_path' => 'assets/salami.svg',
            'picture_name' => 'salami',
            'quantity_gram' => 413,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('toppings')->insert([
            'category_id' => 6,
            'topping_name' => 'Schinken',
            'picture_path' => 'assets/schinken.svg',
            'picture_name' => 'schinken',
            'quantity_gram' => 718,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('toppings')->insert([
            'category_id' => 6,
            'topping_name' => 'Speck',
            'picture_path' => 'assets/speck.svg',
            'picture_name' => 'speck',
            'quantity_gram' => 2130,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}





