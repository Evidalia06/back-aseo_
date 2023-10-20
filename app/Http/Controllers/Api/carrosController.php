<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carro;

class carrosController extends Controller
{
    //
    public function getCarros()
    {
        $carros= Carro::all();
        return response()->json($carros);
    }

    public function setCarro(Request $rq)
    {
        try {
            $resp = Carro::create($rq->all());
            return $resp;
        }catch (\Exception $e) {
            $err = $e->getCode();
            return $err;
        }
    }

    public function updateCarro(Request $rq)
    {
        $resp = Carro::where('id',$rq->id)->update($rq->all());
        return $resp;
    }
}
