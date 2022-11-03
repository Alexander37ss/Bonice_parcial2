<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillable = [
        'n_control',
        'nombre',
        'edad',
        'sexo',
        'fecha_nacimiento',
        'domicilio',
        'telefono'
    ];
}