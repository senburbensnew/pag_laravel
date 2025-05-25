<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objectif extends Model {
    public function projet() {
        return $this->belongsTo(Projet::class);
    }

    public function activites() {
        return $this->hasMany(Activite::class);
    }
}

