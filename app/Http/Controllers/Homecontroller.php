<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function __invoke(){
        /* return view('welcome'); */
    return "Bienvenido a la pagina principal";
    }
}
