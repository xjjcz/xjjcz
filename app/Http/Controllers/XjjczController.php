<?php

namespace App\Http\Controllers;

use App\Model\Information;

class XjjczController extends Controller
{
    public function show(){
        $information = Information::all()->first()->toArray();
        return $information;
    }
}
