<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ {
    Paciente,
   PacienteController

};



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

 Aqui é onde você pode registrar as rotas da web para seu aplicativo. Esses
| as rotas são carregadas pelo RouteServiceProvider dentro de um grupo que
| contém o grupo de middleware "web". Agora crie algo ótimo!
| teste 
*/

Route::get('/', function () {
    return view('admin.post_lista.login');
});

Route:: post('/paciente', [PacienteController::class, 'store'])-> name('paciente.store'); /*amrmazenar * envia para o banco */

Route:: get('/post_listar', [PacienteController::class, 'index']); /* metodo index, aqui vou inserir a pagina principal*/

Route:: get('/paciente/create', [PacienteController::class, 'create'])-> name('paciente.create'); /* envia para a tela de cadastro*/
