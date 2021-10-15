<?php

namespace App\Http\Controllers;

use App\Models\Models\paciente;
use Illuminate\Http\Request;

class post_listarController extends Controller
{
    public function index()

    {

        $paciente = paciente::get();


        return view('admin.post_lista.listar', compact('paciente'));


    }

      
}
