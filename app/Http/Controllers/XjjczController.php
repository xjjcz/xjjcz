<?php

namespace App\Http\Controllers;

use App\Model\Exhaust_temp;
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

    public function clientlist(Request $request)
    {
        $clientfactoryid = $request->session()->get("clientfactoryid");
        //$exhaust_temps = DB::select("select * from exhaust_temp where FACTORY_ID=?",[20087]);
        $exhaust_temps = Exhaust_temp::where("FACTORY_ID", $clientfactoryid)->get()->toArray();
        $totalexhaust = count($exhaust_temps);
        $request->session()->put("totalexhaust", $totalexhaust);
        $request->session()->put("exhaust_temps", $exhaust_temps);
        return view("layouts.companyinfo");
    }
    public function roadlist(Request $request){
        $clientfactoryid = $request->session()->get("clientfactoryid");
        $froaddustsourcetemp = FroadDustSourceTemp::where("factoryid",$clientfactoryid)->get();
        $request->session()->put("froaddustsourcetemp",$froaddustsourcetemp);
        return ;
    }
}
