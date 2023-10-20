<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comuna;

class comunasController extends Controller
{
    //

    public function getComunas()
    {
        $comunas= Comuna::all();
        return response()->json($comunas);
    }

    public function setComuna(Request $rq)
    {
        try {
            $resp = Comuna::create($rq->all());
            return $resp;
        }catch (\Exception $e) {
            $err = $e->getCode();
            return $err;
        }

        
    }

    public function updateComuna(Request $rq)
    {
        $resp = Comuna::where('id_comuna',$rq->id_comuna)->update($rq->all());
        return $resp;
    }
}
