<?php

namespace App\Http\Transformers;

use App\UserSifgl;
use League\Fractal\TransformerAbstract;

class UserSifglTransformer extends TransformerAbstract
{
    public function transform(UserSifgl $user)
    {
        return [
            'var_username' => $user->var_username,
            'email' => $user->email,
            'company_id' => $user->company_id,
            'bol_activo' => $user->bol_activo,
            'bol_eliminado' => $user->bol_eliminado,
            'company_id' => $user->company_id,
            'bol_activar_notificaciones' => $user->bol_activar_notificaciones,
            'txt_notificaciones_email' => $user->txt_notificaciones_email,
        ];
    }
}