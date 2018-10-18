<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSifgl extends Model
{
    /**
     * The database connection used by the model.
     *
     * @var string
     */
     protected $connection = 'sifgl';

     /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = 'users';

	public $fillable = [
        'var_username',
		'email',
		'company_id',
		'bol_activo',
		'bol_eliminado',
		'company_id',
		'bol_activar_notificaciones',
		'txt_notificaciones_email',
    ];
}
