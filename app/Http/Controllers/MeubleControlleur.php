<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeubleControlleur extends Controller
{
    public function liste_meuble(){
        return view('meuble.liste');
    }
}
