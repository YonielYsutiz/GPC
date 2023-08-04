<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCertificateEmisionInfoRequest extends FormRequest
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
        'company_name'=>'nullable',
        'number_invoice'=>'nullable',
        'reference_product'=>'nullable',
        'weight_unit'=>'nullable',
        'count'=>'nullable',
        'total_kg'=>'nullable',
        'total_plastic_paq'=>'nullable',
        'total_etileno'=>'nullable',
        'total_water'=>'nullable',
        'total_d_carbono'=>'nullable',
        'total_energy'=>'nullable',
        'total_tree'=>'nullable',
        ];
    }
}
