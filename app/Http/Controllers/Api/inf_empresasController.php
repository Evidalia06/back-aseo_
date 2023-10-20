<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\inf_empresa;
use App\Http\Resources\InfEmpresaResource;

class inf_empresasController extends Controller
{
    //
    public function getInfEmpresa()
    {
        return response()->json(new InfEmpresaResource(inf_empresa::first()));
    }

    public function updateEmpresa(Request $rq)
    {

        try {
            $inf_empresa = inf_empresa::where('id', $rq->id)->first();
            if($inf_empresa){
                // Seteamos un nuevo titulo
                $inf_empresa->nombre_empresa = $rq->nombre_empresa;
                $inf_empresa->direccion = $rq->direccion;
                $inf_empresa->contacto = $rq->contacto;
                $inf_empresa->mision = $rq->mision;
                $inf_empresa->vision = $rq->vision;
                $inf_empresa->valores = $rq->valores;
                $inf_empresa->copyright = $rq->copyright;
             }
             
            //$inf_empresa = inf_empresa::create($rq->all());

            if ($rq->has('file')) {
                $inf_empresa->clearMediaCollection('img/logos');
                $inf_empresa->addMedia($rq->file('file'))->toMediaCollection('img/logos');
            }
            $inf_empresa->save();
            
            return response()->json(new InfEmpresaResource($inf_empresa));
        }
        catch (\Exception $e) {
            $err = $e->getMessage();
            return response()->json($err)->status(500);
        }


    }

// public function setConsejos(Request $rq)
// {
//     try {
//         $consejo = Consejo::create($rq->all());

//          if ($rq->has('file')){
//              $consejo->addMedia($rq->file('file'))->toMediaCollection('img/consejos');
//          }

//         return response()->json(new ConsejoResource($consejo));
//     }catch (\Exception $e) {
//         $err = $e->getMessage();
//         return response()->json($err)->status(500);
//     }
// }
}
