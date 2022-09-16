<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Saloon;

class Service extends Model
{
    use HasFactory;

    public function getSaloon() {
        return $this->belongsTo(Saloon::class, 'saloon_id', 'id');
    }
}
