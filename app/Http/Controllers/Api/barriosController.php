<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barrio;
use Illuminate\Support\Facades\DB;

class barriosController extends Controller
{
    //

    public function getBarrios()
    {
        $barrios = DB::table('barrios')
            ->join('comunas', 'barrios.nombre_comuna', '=', 'comunas.id_comuna')
            ->select('barrios.*', 'comunas.comuna')
            ->get();
        return response()->json($barrios); 
    }

    public function setBarrio(Request $rq)
    {
        try {
            $resp = Barrio::create($rq->all());
            return $resp;
        }catch (\Exception $e) {
            $err = $e->getCode();
            return $err;
        }
    }

    public function updateBarrio(Request $rq)
    {
        $resp = Barrio::where('id',$rq->id)->update($rq->all());
        return $resp;
    }
}
