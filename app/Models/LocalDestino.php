<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalDestino extends Model
{
    use HasFactory;
    protected $fillable = ['nomelocal',
    'cep',
    'bairro',
    'logradouro',
    'localidade',
    'uf',
    'horario_funcionamento',
    'dias_funcionamento',
    'site_url',
];
}
