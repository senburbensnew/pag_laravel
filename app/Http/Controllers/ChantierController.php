<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChantierController extends Controller
{
    public function store(Request $request)
    {
        return view('chantier');
    }
}
