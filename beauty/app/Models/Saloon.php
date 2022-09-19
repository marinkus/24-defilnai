<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Master;
use App\Models\Service;

class Saloon extends Model
{
    use HasFactory;

    public function getMasters() {
        return $this->hasMany(Master::class, 'saloon_id', 'id');
    }
    public function getServices() {
        return $this->hasMany(Service::class, 'saloon_id', 'id');
    }
}
