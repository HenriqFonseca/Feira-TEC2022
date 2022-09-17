<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalDestino extends Model
{
    use HasFactory;
    public $table ='destino_descarte';
    public $primaryKey ='id_destino_descarte';
    public $incrementing = true;
    public $timestamps = false;
   
}
