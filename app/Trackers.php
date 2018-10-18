<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trackers extends Model
{
    /**
     * The database connection used by the model.
     *
     * @var string
     */
     protected $connection = 'monitoreo';

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = 'trackers';

	public $fillable = [

    ];
}
