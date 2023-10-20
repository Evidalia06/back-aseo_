<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Consejo;
use App\Http\Resources\ConsejoResource;


class ConsejosController extends Controller
{
    //
    public function getConsejos()
    {
        return ConsejoResource::collection(Consejo::all());
    }

    public function setConsejos(Request $rq)
    {
        try {
            $consejo = Consejo::create($rq->all());

             if ($rq->has('file')){
                 $consejo->addMedia($rq->file('file'))->toMediaCollection('img/consejos');
             }

            return response()->json(new ConsejoResource($consejo));
        }catch (\Exception $e) {
            $err = $e->getMessage();
            return response()->json($err)->status(500);
        }
    }

    public function updateConsejo(Request $rq)
    {
        $resp = Consejo::where('id', $rq->id)->update($rq->all());
        return $resp;
    }

    public function addImage(Request $rq)
    {
        if ($rq->has('file')) {
            $file = $rq->file('file');
            $name = $file->getClientOriginalName();
            $ext = $file->getClientOriginalExtension();
            $picture = date('His') . '-' . $name;
            $file->move('img', $picture);
            return "cargo";
        }
        return "No cargo";
    }

}
