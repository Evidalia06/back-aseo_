<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InfEmpresaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nombre_empresa' => $this->nombre_empresa,
            'contacto' => $this->contacto,
            'direccion' => $this->direccion,
            'mision' => $this->mision,
            'vision' => $this->vision,
            'valores' => $this->valores,
            'copyright' => $this->copyright,    
            'logo' => $this->logo, 
        ];
    }
}
