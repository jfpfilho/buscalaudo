<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function create()

    {

        return view('admin.post_lista.cadastro_paciente');

    }

    public function store(Request $request)  /* Request $request cria um objeto de request*/

    {

        dd($request->nome_paciente);

    }
}


