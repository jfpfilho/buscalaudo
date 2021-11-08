<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePaciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function create()

    {

        return view('admin.post_lista.cadastro_paciente');

    }

    public function store(StoreUpdatePaciente $request)  /* Request $request cria um objeto de request*/

    {

        dd($request->nome_prof);

    }

    public function show($id)
    {
        $paciente= Paciente::find($id);    /* procura pelo id no metodo find  / se a variável for diferente retorna a index*/
        
        if (!$paciente)   
        {
           
            return redirect()->route('posts.index'); /* retorna para a index.*/
        }

        return view('admin.posts.show', compact('post'));
    }
    

 }



