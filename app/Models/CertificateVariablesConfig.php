<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertificateVariablesConfig extends Model
{
    use HasFactory;
    protected $table = "certificate_variables_config";
    protected $fillable = [
        'calc_etileno',
        'calc_water',
        'calc_d_carbono',
        'calc_energy',
        'calc_tree',
    ];
}
