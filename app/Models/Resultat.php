<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultat extends Model {
    public function activite() {
        return $this->belongsTo(Activite::class);
    }

    public function indicateurs() {
        return $this->hasMany(Indicateur::class);
    }
}
