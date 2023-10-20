<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'marca',
        'modelo',
        'placa',
        'ciudad_placa'
    ];
    public $timestamps = false;
}
