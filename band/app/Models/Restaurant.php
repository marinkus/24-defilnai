<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{

    const SORT_SELECT = [
        ['title_asc', 'Title A-Z'],
        ['title_desc', 'Title Z-A']
    ];

    use HasFactory;

    public function getDishes() {
        return $this->hasMany(Dish::class, 'restaurant_id', 'id');
    }
}
