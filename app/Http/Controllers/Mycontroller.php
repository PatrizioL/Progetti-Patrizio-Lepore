<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    public function homepage()
    {
        return view('welcome');
    }
}
