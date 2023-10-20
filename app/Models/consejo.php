<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

class Consejo extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    
    protected $fillable = ['id','nombre_consejo','descripcion'];
    public $timestamps = false;

    public function getImgAttribute(){


        if($img = $this->getMedia('img/consejos')->first()){
            
            return $img->getUrl();
        }

        return asset('img/default_getConsejo.png');
    }
}
