<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    use HasFactory;

    protected $table = 'pciente';

    protected $fillable = ['id_cpf_paciente', 'nome_paciente', 'sexo', 'n_prontuário','tel_resp',
    'cartao_nacional_saude', 'dt_nasc','raca_cor','etnia','mae','tel_mae','endereco', 'municipio', 'cod_ibge_municipio', 
    'uf','cep','responsavel'];
}
