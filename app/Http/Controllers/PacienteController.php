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
        $pacientes= Paciente::find($id);    /* procura pelo id no metodo find  / se a variável for diferente retorna a index*/
         
        return view('admin.post_lista.listar_paciente2', compact('pacientes'));
        
    }
    
    public function search(Request $request) /* a partir do request que pega os dados da pesquisa*/
    {
 
         $filters = $request->except('_token');
 
         $pacientes = Paciente::where('nome', 'LIKE', "%{$request->search}%")  
                     ->orwhere('cpf', 'LIKE', "%{$request->search}%")
                     ->orwhere('mae', 'LIKE', "%{$request->search}%");   /*  ->paginate(1);*/
         return view('admin.post_lista.listar_paciente', compact('pacientes','filters'));

         if(!$pacientes)
         
                {
                    echo "<script> alert ('Paciente não possui cadastro, favor cadastrá-lo!') </script>";
                    return redirect()->route('paciente.create'); /**/
                

                }
    }

 }



