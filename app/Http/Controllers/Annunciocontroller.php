<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Annunciocontroller extends Controller
{
    public function crea_annuncio()
    {
        return view('annunci/crea');
    }
}
