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
            $nombre = "Jake Smith";
            $correo = "Jake@hotmail.com";
            $comentario = "Hola que tal, espero te encuentres bien. Estoy interesado en contactarte.";
            return view('contacto', compact('nombre', 'correo', 'comentario'));
        }

        return view('contacto');
    }

    public function formContacto(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'comentario' => 'required|string|max:65535',
        ]);

        DB::table('contactos')->insert([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'comentario' => $request->comentario,
        ]);
        return redirect('/landingpage');
    }
}
