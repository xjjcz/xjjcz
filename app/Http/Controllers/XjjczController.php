<?php

namespace App\Http\Controllers;

use App\Model\Information;

class XjjczController extends Controller
{
    public function show(){
        $a = $_POST["id"];
        //$information = Information::all()->first()->toArray();
        $information = Information::where('id','=',2)->first();
        var_dump($information->information);
        return $information;
    }
}
