<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Conductor;

class conductorsController extends Controller
{
    //
    public function getConductores()
    {
        $conductores= Conductor::all();
        return response()->json($conductores);
    }

    public function setConductor(Request $rq)
    {
        try {
            $resp = Conductor::create($rq->all());
            return $resp;
        }catch (\Exception $e) {
            $err = $e->getCode();
            return $err;
        } 
    }

    public function updateConductor(Request $rq)
    {
        $resp = Conductor::where('id',$rq->id)->update($rq->all());
        return $resp;
    }
}
