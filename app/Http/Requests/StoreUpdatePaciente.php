<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePaciente extends FormRequest
{
    /**
     * Determine se o usuário está autorizado a fazer esta solicitação.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     *Obtenha as regras de validação que se aplicam à solicitação.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome_paciente'=>['required', 'max:60'],
            'cpf_paciente'=>['required', 'min:11','max:11'],
            'dt_nasc_paciente'=>['required'],
            'responsavel'=>['required', 'max:60'],
            'tel_resp'=>['required'],
            'end'=>['required'],
            'municipio'=>['required'],
            'n_ibge_mun'=>['required'],
            'uf'=>['required'],
            'cep'=>['required', 'max:9'],
        ];
    }
}
