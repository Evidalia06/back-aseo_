<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Horario;

class horariosController extends Controller
{
    //
    public function getHorarios()
    {
        $horarios= Horario::all();
        return response()->json($horarios);
    }

    public function setHorario(Request $rq)
    {
        try {
            $resp = Horario::create($rq->all());
            return $resp;
        }catch (\Exception $e) {
            $err = $e->getCode();
            return $err;
        }
    }

    public function updateHorario(Request $rq)
    {
        $resp = Horario::where('id_horario',$rq->id_horario)->update($rq->all());
        return $resp;
    }
}
