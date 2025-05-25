<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indicateur extends Model {
    public function resultat() {
        return $this->belongsTo(Resultat::class);
    }
}
