<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Activite extends Model {
    public function objectif() {
        return $this->belongsTo(Objectif::class);
    }

    public function resultats() {
        return $this->hasMany(Resultat::class);
    }

    public function suivis() {
        return $this->hasMany(SuiviActivite::class);
    }
}