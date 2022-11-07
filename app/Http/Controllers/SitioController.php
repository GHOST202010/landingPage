<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            $description = "Hola que tal, espero te encuentres bien. Estoy interesado en contactarte.";
            return view('contacto', compact('name', 'lastName', 'email', 'description'));
        }

        return view('contacto');
    }

    public function recibeFormContacto(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'description' => 'required|string|max:65535',
        ]);

        DB::table('contact')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'description' => $request->description,
        ]);
        return redirect('/landingpage');
    }
}
