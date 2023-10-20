<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;


class inf_empresa extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $fillable = [
        'id',
        'nombre_empresa',
        'contacto',
        'direccion',
        'mision',
        'vision',
        'valores',
        'copyright'
    ];
    public $timestamps = false;

    public function getLogoAttribute(){


        if($img = $this->getMedia('img/logos')->first()){
            
            return $img->getUrl();
        }

        return asset('img/default_getConsejo.png');
    }
}
