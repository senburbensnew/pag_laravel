<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuiviActivite extends Model {
    public function activite() {
        return $this->belongsTo(Activite::class);
    }

    public function personneRessource() {
        return $this->belongsTo(User::class);
    }
}
