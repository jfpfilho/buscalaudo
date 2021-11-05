<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcedimentosController extends Controller
{
    public function create()

    {
        return view('admin.post_lista.cadastro_procedimentos');

    }
    public function store(Request $request)  /* Request $request cria um objeto de request*/

    {
        dd($request->cod_proc);

    }
}
