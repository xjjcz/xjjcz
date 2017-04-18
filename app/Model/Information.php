<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps = false;
    protected $table = "information";

    protected $fillable=['information'];
}
