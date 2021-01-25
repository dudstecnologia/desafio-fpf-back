<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjetoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|max:100',
            'data_inicio' => 'required|date_format:d/m/Y',
            'data_termino' => 'required|date_format:d/m/Y',
            'valor' => 'required|integer',
            'risco' => 'required|min:0|max:3',
            'participantes' => 'required'
        ];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        $valor = preg_replace('/[^0-9]/', '', $this->get('valor'));

        $this->merge(compact('valor'));
    }
}
