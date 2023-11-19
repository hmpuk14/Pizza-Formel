<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_date',
        'total_price',
    ];
    public function pizzas()
    {
        return $this->hasMany(Pizza::class);
    }
    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }
}

