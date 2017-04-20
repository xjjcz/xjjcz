<?php

namespace App\Http\Controllers;

use App\Model\Information;
use App\Model\User;

class UserController extends Controller
{
    public function dochange(){
        $newpwd = $_POST["newpwd"];
        $fac_no = $_POST["fac_no"];
        $user = User::where('fac_no',$fac_no)->update(array('password'=>$newpwd));
//        $information = Information::all()->first()->toArray();
//        $information = Information::where('id','=',2)->first();

    }
}
