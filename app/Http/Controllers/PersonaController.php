<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    function mostrarForm($id = null)
    {
        if (!$id) {
            return "debe pasar un id";
        }
        return "From id:" . $id;
    }
}

