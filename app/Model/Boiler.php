<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Boiler extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps = false;
    protected $table = "boiler_temp";

}
