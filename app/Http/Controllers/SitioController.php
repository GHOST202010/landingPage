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
            $description = "Probando los parametros que se necesitan";
            return view('contacto', compact('name', 'lastName', 'email', 'description'));
        }

        return view('contacto');
    }

    public function recibeFormContacto(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'description' => 'required',
        ]);

        DB::table('contactos')->insert([
            'nombre' => $request->name,
            'correo' => $request->email,
            'comentario' => $request->description,
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now()->timezone(''),
        ]);
        return redirect('/landingpage');
    }
}
