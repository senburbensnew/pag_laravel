<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model {
    use HasFactory;

    public function objectifs() {
        return $this->hasMany(Objectif::class);
    }
}
