<?php

namespace App\Http\Controllers;

use App\Model\Exhaust_temp;
use App\Model\FbaresoilDustTemp;
use App\Model\FconstructionDustTemp;
use App\Model\FnoOrganizationTemp;
use App\Model\FroadDustSourceTemp;
use App\Model\FyardDustTemp;
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
    public function roadlist(Request $request)
    {
        $clientfactoryid = $request->session()->get("clientfactoryid");
        $froaddustsourcetemp = FroadDustSourceTemp::where("factoryid", $clientfactoryid)->get();
        return view('layouts.listRoad', ['froaddustsourcetemp' => $froaddustsourcetemp]);
    }

    public function toconstruction(Request $request)
    {
        $clientfactoryid = $request->session()->get("clientfactoryid");
        $fconstructionsourcetemp = FconstructionDustTemp::where("factoryid", $clientfactoryid)->get();
        return view('layouts.constructionDust', ['fconstructionsourcetemp' => $fconstructionsourcetemp]);
    }
    public function toyarddustlist(Request $request){
        $clientfactoryid = $request->session()->get("clientfactoryid");
        $fyarddust = FyardDustTemp::where("factoryid",$clientfactoryid)->get();
        return view('layouts.FyardDust',['fyarddust'=>$fyarddust]);
    }

    public function Roadlistsave_update(Request $request)
    {
        $a=1;
        $state = FroadDustSourceTemp::where('road_dustid', $_POST['roadDustid'])->update(array(
            'company_name' => $_POST['companyName'],
            'path_length' => $_POST['pathLength'],
            'ispave' => $_POST['ispave'],
            'aver_width' => $_POST['averWidth'],
            'aver_weight' => $_POST['averWeight'],
            'car_flow' => $_POST['carFlow'],
            'aver_speed' => $_POST['averSpeed'],
            'clear_time_install' => $_POST['clearTimeInstall'],
            'clear_time_uninstall' => $_POST['clearTimeUninstall'],
            'sweep_spring' => $_POST['sweepSpring'],
            'sweep_summer' => $_POST['sweepSummer'],
            'sweep_fall' => $_POST['sweepFall'],
            'water_times_spring' => $_POST['waterTimesSpring'],
            'water_times_summer' => $_POST['waterTimesSummer'],
            'water_times_fall' => $_POST['waterTimesFall'],
            'dust_suppression' => $_POST['dustSuppression'],
        ));
        if ($state) {
            return 1;
        } else {
            return 0;
        }

    }

    public function Roadlistdelete()
    {
        $state = FroadDustSourceTemp::where('road_dustid', $_POST['roaddustid'])->delete();
        if ($state) {
            return 1;
        } else {
            return 0;
        }

    }

    public function Conlistdelete()
    {
        $state = FconstructionDustTemp::where('construct_dustid', $_POST['conid'])->delete();
        if ($state) {
            return 1;
        } else {
            return 0;
        }
    }
    public function deleteYard()
    {
        $state = FyardDustTemp::where('wind_dustid', $_POST['windDustid'])->delete();
        if ($state) {
            return 1;
        } else {
            return 0;
        }
    }

    public function Roadlistinsert(Request $request)
    {
        $f = new FroadDustSourceTemp();

        $f->scccode = $_POST['scccode'];
        $f->company_name = $_POST['companyName'];
        $f->factoryid = $_POST['roadfactoryid'];
        $f->path_length = $_POST['pathLength'];
        $f->ispave = $_POST['ispave'];
        $f->aver_width = $_POST['averWidth'];
        $f->aver_weight = $_POST['averWeight'];
        $f->car_flow = $_POST['carFlow'];
        $f->aver_speed = $_POST['averSpeed'];
        $f->clear_time_install = $_POST['clearTimeInstall'];
        $f->clear_time_uninstall = $_POST['clearTimeUninstall'];
        $f->sweep_spring = $_POST['sweepSpring'];
        $f->sweep_summer = $_POST['sweepSummer'];
        $f->sweep_fall = $_POST['sweepFall'];
        $f->water_times_spring = $_POST['waterTimesSpring'];
        $f->water_times_summer = $_POST['waterTimesSummer'];
        $f->water_times_fall = $_POST['waterTimesFall'];
        $f->dust_suppression = $_POST['dustSuppression'];
        $f->save();
        $state = 1;
        if ($state) {
            return 1;
        } else {
            return 0;
        }
    }

    public function updateCon()
    {
        $state = FconstructionDustTemp::where('construct_dustid', $_POST['constructDustid'])->update(array(
            'construction_type' => $_POST['constructionType'],
            'construct_state' => $_POST['constructState'],
            'construct_area' => $_POST['constructArea'],
            'nowkgarea' => $_POST['nowkgarea'],
            'startdate' => $_POST['startdate'],
            'finishdate' => $_POST['finishdate'],
            'construct_months' => $_POST['constructMonths'],
            'control_measures' => $_POST['controlMeasures']
        ));
        if ($state) {
            return 1;
        } else {
            return 0;
        }
    }

    public function addCon()
    {

    }
    public function updateYard(){
        $a = 1;
        $a = 12;
        $state = FconstructionDustTemp::where('wind_dustid', $_POST['windDustid'])->update(array(
            'material_type' => $_POST['materialType'],
            'moisture_materia' => $_POST['moistureMateria'],
            'material_capacity' => $_POST['materialCapacity'],
            'loading_count' => $_POST['loadingCount'],
            'loading_capacity' => $_POST['loadingCapacity'],
            'heap_covered' => $_POST['heapCovered'],
            'heap_area' => $_POST['heapArea'],
            'heap_heigh' => $_POST['heapHeigh'],
            'loading_start' => $_POST['loadingStart'],
            'loading_time' => $_POST['loadingTime'],
            'control_measures1' => $_POST['controlMeasures1'],
            'control_measures' => $_POST['controlMeasures']
        ));
        if ($state) {
            return 1;
        } else {
            return 0;
        }
    }
    public  function tobaresoil(Request $request){
        $clientfactoryid = $request->session()->get("clientfactoryid");
        $fbaresoil = FbaresoilDustTemp::where("factoryid",$clientfactoryid)->get();
        return view('layouts.FbareSoilDust',['fbaresoil'=>$fbaresoil]);
    }
    public function deleteSoil(Request $request){
        $state = FbaresoilDustTemp::where('bare_soilid',$_POST['baresoilid'])->delete();
        return $state;
    }
    public function updatebareinfo(Request $request){
        $state = FbaresoilDustTemp::where('bare_soilid',$_POST['bareSoilid'])->update(array('bare_soil_area'=>$_POST['bareSoilArea']));
        return $state;
    }
    public function tonoOrganizationWorkshop(Request $request){
        $clientfactoryid = $request->session()->get("clientfactoryid");
        $fnoOrganizationWorkshop = FnoOrganizationTemp::where('factoryid',$clientfactoryid)->get();
        return view('layouts.noOrganizationWorkshop',['fnoOrganizationWorkshop'=>$fnoOrganizationWorkshop]);
    }
    public function noOrganizationdelete(){
        $state = FnoOrganizationTemp::where('wsid',$_POST['wsid'])->delete();
        return $state;

    }
    public function  FnoOrganizationWorkshopDischargeTempupdate(){
        $state = FnoOrganizationTemp::where('wsid',$_POST['wsid'])->update(array(
            'workshopid' => $_POST['workshopid'],
            'longitude' => $_POST['longitude'],
            'latitude' => $_POST['latitude'],
            'production_use' => $_POST['productionUse'],
            'workshop_area' => $_POST['workshopArea']));
        return $state;
    }
}
