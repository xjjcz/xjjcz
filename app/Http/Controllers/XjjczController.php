<?php

namespace App\Http\Controllers;

use App\Model\Exhaust_temp;
use App\Model\FroadDustSourceTemp;
use App\Model\Information;
use Illuminate\Http\Request;
use DB;

class XjjczController extends Controller
{
    public function show(){
        $a = $_POST["id"];
        //$information = Information::all()->first()->toArray();
        $information = Information::where('id','=',2)->first();
        var_dump($information->information);
        return $information;
    }

    public function clientlist(Request $request){

        //$exhaust_temps = DB::select("select * from exhaust_temp where FACTORY_ID=?",[25774]);
        //记录结果的条数；
        $exhaust_temps = Exhaust_temp::where("FACTORY_ID",'25774')->count();

        //$d = count($exhaust_temps);
        //$totalexhaust = count($exhaust_temps);
        //$i=1;
    }
    public function roadlist(Request $request){
        $clientfactoryid = $request->session()->get("clientfactoryid");
        $froaddustsourcetemp = FroadDustSourceTemp::where("factoryid",$clientfactoryid)->get();
        $request->session()->put("froaddustsourcetemp",$froaddustsourcetemp);
        return ;
    }
}
