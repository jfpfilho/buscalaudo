<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ {
    CidController,
    EmpresaController,
    Paciente,
   PacienteController,
    ProcedimentosController,
    ProfissionalController,
    UsuarioController
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
    return view('admin.post_lista.login');});
    
Route:: get('/pesquisa_paciente', [PacienteController::class, 'show'])-> name('paciente.show');/* metodo index, aqui vou inserir a pagina principal*/

Route:: post('/paciente', [PacienteController::class, 'store'])-> name('paciente.store'); /*amrmazenar * envia para o banco */

Route:: get('/paciente/create', [PacienteController::class, 'create'])-> name('paciente.create'); /* envia para a tela de cadastro*/

Route:: put('/paciente', [PacienteController::class, 'update'])-> name('paciente.update'); /* envia para a tela de cadastro*/

Route:: get('/profissional/create', [ProfissionalController::class, 'create'])-> name('profissional.create'); /* envia para a tela de cadastro*/

Route:: post('/profissional', [ProfissionalController::class, 'store'])-> name('profissional.store'); /*amrmazenar * envia para o banco */

Route:: get('/procedimentos/create', [ProcedimentosController::class, 'create'])-> name('procedimentos.create'); /* envia para a tela de cadastro*/

Route:: post('/procedimento', [ProcedimentosController::class, 'store'])-> name('procedimentos.store'); /*amrmazenar * envia para o banco */

Route:: get('/cid/create', [CidController::class, 'create'])-> name('cid.create'); /* envia para a tela de cadastro*/

Route:: post('/cid', [CidController::class, 'store'])-> name('cid.store'); /*amrmazenar * envia para o banco */

Route:: get('/empresa/create', [EmpresaController::class, 'create'])-> name('empresa.create'); /* envia para a tela de cadastro*/

Route:: post('/empresa', [EmpresaController::class, 'store'])-> name('empresa.store'); /*amrmazenar * envia para o banco */

Route:: get('/usuario/create', [UsuarioController::class, 'create'])-> name('usuario.create'); /* envia para a tela de cadastro*/

Route:: post('/usuario', [UsuarioController::class, 'store'])-> name('usuario.store'); /*amrmazenar * envia para o banco */