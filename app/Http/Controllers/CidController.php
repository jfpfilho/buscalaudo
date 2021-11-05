<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CidController extends Controller
{
    public function create()

    {
        return view('admin.post_lista.cadastro_cid');

    }
    public function store(Request $request)  /* Request $request cria um objeto de request*/

    {
        dd($request->nome_desc_cid);

    }
}
