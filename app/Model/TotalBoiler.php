<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TotalBoiler extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps = false;
    protected $table = "total_boiler_temp";

}
