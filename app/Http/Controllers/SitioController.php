<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{

    public function showLanding()
    {
        return view('landingpage');
    }

    public function contacto($codigo = null)
    {
        if (!empty($codigo) && $codigo == "1234") {
            $name = "Jake";
            $lastName = "Smith";
            $email = "Jake@hotmail.com";
            $description = "Probando los parametros que se necesitan";
            return view('contacto', compact('name', 'lastname', 'email', 'description'));
        }
        return view('contacto');
    }
}
