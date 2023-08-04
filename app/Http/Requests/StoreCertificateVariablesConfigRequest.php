<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCertificateVariablesConfigRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'calc_etileno'=>'required',
            'calc_water'=>'required',
            'calc_d_carbono'=>'required',
            'calc_energy'=>'required',
            'calc_tree'=>'required'
        ];
    }
}
