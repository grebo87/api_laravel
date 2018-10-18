<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSiagl extends Model
{
    /**
     * The database connection used by the model.
     *
     * @var string
     */
     protected $connection = 'siagl';

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
		'enm_tipo_usuario',
		'bol_activo',
		'bol_eliminado',
		'bol_main',
    ];
}
