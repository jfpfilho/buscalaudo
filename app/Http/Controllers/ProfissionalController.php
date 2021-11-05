<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfissionalController extends Controller
{
    public function create()

    {
        return view('admin.post_lista.cadastro_profissional');

    }

    public function store(Request $request)  /* Request $request cria um objeto de request*/

    {
        dd($request->nome_prof);

    }
}
