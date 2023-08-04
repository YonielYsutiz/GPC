<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertificateEmisionInfo extends Model
{
    use HasFactory;

    protected $table = "certificate_emision_info";

    protected $fillable = [
        'company_name',
        'number_invoice',
        'reference_product',
        'weight_unit',
        'count',
        'total_kg',
        'total_plastic_paq',
        'total_etileno',
        'total_water',
        'total_d_carbono',
        'total_energy',
        'total_tree',
    ];
}
