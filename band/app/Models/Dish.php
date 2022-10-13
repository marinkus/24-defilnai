<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    const SORT_SELECT = [
        ['rate_asc', 'Rating 1-9'],
        ['rate_decs', 'Rating 9-1'],
        ['title_asc', 'Title A-Z'],
        ['title_decs', 'Title Z-A'],
        ['price_asc', 'Price low-high'],
        ['price_desc', 'Price high-low']
    ];

    public function getRestaurant() {
        return $this->belongsTo(Restaurant::class, 'restaurant_id', 'id');
    }
}
