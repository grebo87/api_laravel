<?php

namespace App\Http\Transformers;

use App\UserSiagl;
use League\Fractal\TransformerAbstract;

class UserSiaglTransformer extends TransformerAbstract
{
    public function transform(UserSiagl $user)
    {
        return [
            'var_username' => $user->var_username,
            'email' => $user->email,
            'company_id' => $user->company_id,
            'enm_tipo_usuario' => $user->enm_tipo_usuario,
            'bol_activo' => $user->bol_activo,
            'bol_eliminado' => $user->bol_eliminado,
            'bol_main' => $user->bol_main,
        ];
    }
}