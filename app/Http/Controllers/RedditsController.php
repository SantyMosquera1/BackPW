<?php

namespace App\Http\Controllers;

use App\Models\Reddit;

class RedditsController extends Controller
{
    
    public function getAllReddits()
    {
        // Obtiene todos los registros de la tabla Reddit en la base de datos
        $reddit = Reddit::all();

        // Devuelve una respuesta JSON con los datos obtenidos
        return response()->json($reddit);
    }
}

