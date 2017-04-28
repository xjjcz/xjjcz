<?php

namespace App\Http\Controllers;

use App\Model\Device_temp;
use App\Model\City;
use App\Model\Exhaust_temp;
use App\Model\FbaresoilDustTemp;
use App\Model\FconstructionDustTemp;
use App\Model\FnoOrganizationTemp;
use App\Model\FroadDustSourceTemp;
use App\Model\FyardDustTemp;
use App\Model\IndustryBig;
use App\Model\IndustrySmall;
use App\Model\Information;
use App\Model\Total_productraw_temp;
use App\Model\Xie;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use DB;

class XjjczController extends Controller
{
    public function show()
    {
        //$a = $_POST["id"];
        //$information = Information::all()->first()->toArray();
        $information = Xie::all();
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
        //find product
        $total_productraw_temp = Total_productraw_temp::where("FACTORY_ID",$clientfactoryid)->get()->toArray();
        $request->session()->put("total_productraw_temp",$total_productraw_temp);
        $request->session()->put("device_num",$total_productraw_temp[0]["device_num"]);
        //find device by exhaust
        $device_temps = array();
        foreach($exhaust_temps as $exhaust_temp){
            $devices = Device_temp::where("EXHUST_ID",$exhaust_temp["EXF_ID"])->get()->toArray();
            foreach($devices as $device){
                array_push($device_temps,$device);
            }
        }
        $request->session()->put("device_temps",$device_temps);
        $industry_big = IndustryBig::all();
        $city = City::all();
        return view("layouts.companyinfo", ["industry_big" => $industry_big]);
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

    public function toyarddustlist(Request $request)
    {
        $clientfactoryid = $request->session()->get("clientfactoryid");
        $fyarddust = FyardDustTemp::where("factoryid", $clientfactoryid)->get();
        return view('layouts.FyardDust', ['fyarddust' => $fyarddust]);
    }

    public function Roadlistsave_update(Request $request)
    {
        $a = 1;
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
        //$f->factoryid = $request->session()->get('clientfactoryid');
        $f->scccode = $_POST['scccode'];
        $f->company_name = $_POST['companyName'];
        $f->factoryid = intval($_POST['roadfactoryid']);
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

    public function addCon(Request $request)
    {
        $fconstructionDustTemp = new FconstructionDustTemp();
        $fconstructionDustTemp->factoryid = $request->session()->get('clientfactoryid');
        $fconstructionDustTemp->construction_type = $_POST['constructionType'];
        $fconstructionDustTemp->construct_state = $_POST['constructState'];
        $fconstructionDustTemp->construct_area = $_POST['constructArea'];
        $a = $_POST['nowkgarea'];
        if ($a == "") {
            $fconstructionDustTemp->nowkgarea = 0;
        } else {
            $fconstructionDustTemp->nowkgarea = $_POST['nowkgarea'];
        }
        //$fconstructionDustTemp->startdate = $_POST['startdate'];
        //$fconstructionDustTemp->finishdate = $_POST['finishdate'];
        $fconstructionDustTemp->construct_months = $_POST['constructMonths'];
        $fconstructionDustTemp->control_measures = $_POST['controlMeasures'];
        $fconstructionDustTemp->scccode = '1603004002';
        $fconstructionDustTemp->save();
        return 1;
        /* $state = FconstructionDustTemp::create(array(

             'factoryid' => $request->session()->get('clientfactoryid'),
             'construction_type' => $_POST['constructionType'],
             'construct_state' => $_POST['constructState'],
             'construct_area' => $_POST['constructArea'],
             'nowkgarea' => $_POST['nowkgarea'],
             'startdate' => $_POST['startdate'],
             'finishdate' => $_POST['finishdate'],
             'construct_months' => $_POST['constructMonths'],
             'control_measures' => $_POST['controlMeasures']
         ));*/
    }

    public function updateYard()
    {
        $state = FyardDustTemp::where('wind_dustid', $_POST['windDustid'])->update(array(
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

    public function addYardDust(Request $request)
    {
        $fyardDustTemp = new FyardDustTemp();
        $fyardDustTemp->factoryid = $request->session()->get('clientfactoryid');
        $fyardDustTemp->material_type = $_POST['materialType'];
        $fyardDustTemp->moisture_materia = $_POST['moistureMateria'];
        $fyardDustTemp->material_capacity = $_POST['materialCapacity'];
        $fyardDustTemp->loading_count = $_POST['loadingCount'];
        $fyardDustTemp->loading_capacity = $_POST['loadingCapacity'];
        $fyardDustTemp->heap_covered = $_POST['heapCovered'];
        $fyardDustTemp->heap_area = $_POST['heapArea'];
        $fyardDustTemp->heap_heigh = $_POST['heapHeigh'];
        $fyardDustTemp->loading_start = $_POST['loadingStart'];
        $fyardDustTemp->loading_time = $_POST['loadingTime'];
        $fyardDustTemp->control_measures1 = $_POST['controlMeasures1'];
        $fyardDustTemp->control_measures = $_POST['controlMeasures'];
        $fyardDustTemp->scccode = '1603004002';
        $fyardDustTemp->save();
        return 1;
    }

    public function tobaresoil(Request $request)
    {
        $clientfactoryid = $request->session()->get("clientfactoryid");
        $fbaresoil = FbaresoilDustTemp::where("factoryid", $clientfactoryid)->get();
        return view('layouts.FbareSoilDust', ['fbaresoil' => $fbaresoil]);
    }

    public function deleteSoil(Request $request)
    {
        $state = FbaresoilDustTemp::where('bare_soilid', $_POST['baresoilid'])->delete();
        return $state;
    }

    public function updatebareinfo(Request $request)
    {
        $state = FbaresoilDustTemp::where('bare_soilid', $_POST['bareSoilid'])->update(array('bare_soil_area' => $_POST['bareSoilArea']));
        return $state;
    }

    public function tonoOrganizationWorkshop(Request $request)
    {
        $clientfactoryid = $request->session()->get("clientfactoryid");
        $fnoOrganizationWorkshop = FnoOrganizationTemp::where('factoryid', $clientfactoryid)->get();
        return view('layouts.noOrganizationWorkshop', ['fnoOrganizationWorkshop' => $fnoOrganizationWorkshop]);
    }

    public function noOrganizationdelete()
    {
        $state = FnoOrganizationTemp::where('wsid', $_POST['wsid'])->delete();
        return $state;

    }

    public function FnoOrganizationWorkshopDischargeTempupdate()
    {
        $state = FnoOrganizationTemp::where('wsid', $_POST['wsid'])->update(array(
            'workshopid' => $_POST['workshopid'],
            'longitude' => $_POST['longitude'],
            'latitude' => $_POST['latitude'],
            'production_use' => $_POST['productionUse'],
            'workshop_area' => $_POST['workshopArea']));
        $a = $state;
        return $state;
    }

    public function savenoOrganpageadd(Request $request)
    {
        $fnoOrganizationTemp = new  FnoOrganizationTemp();
        $fnoOrganizationTemp->factoryid = $request->session()->get('clientfactoryid');
        $fnoOrganizationTemp->workshopid = $_POST['workshopid'];
        $fnoOrganizationTemp->longitude = $_POST['longitude'];
        $fnoOrganizationTemp->latitude = $_POST['latitude'];
        $fnoOrganizationTemp->production_use = $_POST['productionUse'];
        $fnoOrganizationTemp->workshop_area = $_POST['workshopArea'];
        $fnoOrganizationTemp->save();
        return 1;
    }

    public function savepagesoiladd(Request $request)
    {
        $fbaresoilDustTemp = new FbaresoilDustTemp();
        $fbaresoilDustTemp->factoryid = $request->session()->get("clientfactoryid");
        $fbaresoilDustTemp->bare_soil_area = $_POST['barearea'];
        $fbaresoilDustTemp->save();
        return 1;
    }

    public function ExhaustTempsaveevery(Request $request)
    {
        $exhaust_temp = new Exhaust_temp();
        $exhaust_temp->FACTORY_ID = $request->session()->get('clientfactoryid');
        $exhaust_temp->NK_NO = $_POST['fabriexfno'];
        $exhaust_temp->EXF_MATERIAL = $_POST['exfMaterial'];
        $exhaust_temp->EXF_HEIGHT = $_POST['exfHeight'];
        $exhaust_temp->SMOKE_OUTD = $_POST['smokeOutd'];
        $exhaust_temp->SMOKE_O_UTTE_M = $_POST['smokeOutteM'];
        $exhaust_temp->SMOKE_OUTV = $_POST['smokeOutv'];
        $exhaust_temp->SMOKE_OUTA = $_POST['smokeOuta'];
        $exhaust_temp->EXF_LONGITUDE = $_POST['exfLongitude'];
        $exhaust_temp->EXF_LATITUDE = $_POST['exfLatitude'];
        $exhaust_temp->save();

        if (1) {
            $clientfactoryid = $request->session()->get("clientfactoryid");
            //$exhaust_temps = DB::select("select * from exhaust_temp where FACTORY_ID=?",[20087]);
            $exhaust_temps = Exhaust_temp::where("FACTORY_ID", $clientfactoryid)->get()->toArray();
            $totalexhaust = count($exhaust_temps);
            $request->session()->put("totalexhaust", $totalexhaust);
            $request->session()->put("exhaust_temps", $exhaust_temps);
            return 1;
        } else {
            return 0;
        }
    }

    public function GetindustrySmallId()
    {
        $getindustrySmallId = IndustrySmall::where('industry_big', $_POST['industrybigid'])->get();
        return $getindustrySmallId;
    }
}
