<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function create()

    {
        return view('admin.post_lista.cadastro_usuario');

    }
    public function store(Request $request)  /* Request $request cria um objeto de request*/

    {
        dd($request->nome_usuario);

    }
}
