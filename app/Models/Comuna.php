<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_comuna',
        'comuna'
    ];
    public $timestamps = false;
}
