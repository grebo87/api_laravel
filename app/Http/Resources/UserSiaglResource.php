<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserSiaglResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        return [
            'var_username' => $this->var_username,
            'email' => $this->email,
            'company_id' => $this->company_id,
            'enm_tipo_usuario' => $this->enm_tipo_usuario,
            'bol_activo' => $this->bol_activo,
            'bol_eliminado' => $this->bol_eliminado,
            'bol_main' => $this->bol_main,
            'resource' => 'UserSiaglResource'
        ];
    }
}
