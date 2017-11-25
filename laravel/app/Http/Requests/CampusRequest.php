<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CampusRequest extends FormRequest
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
         'nomeCampus' => 'required',
         'logradouro' => 'required|max:100',
         'cidade'=> 'required',
         'cep'=> 'required',
         'uf'=> 'required',
         'telefone'=> 'required'
      ];
    }

    public function messages(){
      return [
                
             ];
    }
}
