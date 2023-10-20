<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'cedula',
        'nombre',
        'licencia',
        'tipo_licencia',
        'telefono',
        'direccion'
    ];
    public $timestamps = false;
}
