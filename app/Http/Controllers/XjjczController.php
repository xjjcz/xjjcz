<?php

namespace App\Http\Controllers;

use App\Model\Boiler;
use App\Model\Device_product_temp;
use App\Model\Device_raw_temp;
use App\Model\Device_temp;
use App\Model\City;
use App\Model\Exhaust_temp;
use App\Model\Factory;
use App\Model\FbaresoilDustTemp;
use App\Model\FconstructionDustTemp;
use App\Model\Feiqi;
use App\Model\FnoOrganizationTemp;
use App\Model\FroadDustSourceTemp;
use App\Model\FyardDustTemp;
use App\Model\GetCounty;
use App\Model\IndustryBig;
use App\Model\IndustrySmall;
use App\Model\Information;
use App\Model\Scc2;
use App\Model\Scc3;
use App\Model\Scc4;
use App\Model\Total_productraw_temp;
use App\Model\TotalBoiler;
use App\Model\Xie;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use DB;
use Illuminate\Http\Response;
use function Sodium\add;

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
        $total_productraw_temp = Total_productraw_temp::where("FACTORY_ID", $clientfactoryid)->get()->toArray();
        $request->session()->put("total_productraw_temp", $total_productraw_temp);
        $request->session()->put("device_num", $total_productraw_temp[0]["device_num"]);
        $request->session()->put("raw_num", $total_productraw_temp[0]["raw_num"]);
        $request->session()->put("product_num", $total_productraw_temp[0]["product_num"]);
        //find device by exhaust
        $device_temps = array();
        foreach ($exhaust_temps as $exhaust_temp) {
            $devices = Device_temp::where("EXHUST_ID", $exhaust_temp["EXF_ID"])->get()->toArray();
            foreach ($devices as $device) {
                array_push($device_temps, $device);
            }
        }
        $request->session()->put("device_temps", $device_temps);
        //find total guolu count by total_boiler
        $totalboiler = TotalBoiler::where('FACTORY_ID',$clientfactoryid)->get();
        $boiler_temps = Boiler::where('TBOILER_ID',$totalboiler[0]['TBOILER_ID'])->get();
        $request->session()->put("boiler_temps",$boiler_temps);
        //guolu count
        $request->session()->put("boiler_num",count($boiler_temps));
        //guolu real count
        $request->session()->put("boiler_realnum",count($boiler_temps));

        //find raw by device
        $device_raw_temps = array();

        foreach ($device_temps as $device_temp){
            $raws = Device_raw_temp::where("device_id",$device_temp["id"])->get()->toArray();
            foreach ($raws as $raw){
                array_push($device_raw_temps,$raw);
            }
        }
        $request->session()->put("device_raw_temps",$device_raw_temps);
        //find product by device
        $device_product_temps = array();
        foreach ($device_temps as $device_temp){
            $products = Device_product_temp::where("device_id",$device_temp["id"])->get()->toArray();
            foreach ($products as $product){
                array_push($device_product_temps,$product);
            }
        }
        $request->session()->put("device_product_temps",$device_product_temps);
        $industry_big = IndustryBig::all();
        $city = City::all();
        //session about feiqi
        $feiqi = Feiqi::where('factory_id',$clientfactoryid)->get();
        $request->session()->put("feiqi",$feiqi);
        $request->session()->put("feiqi_num",count($feiqi));
        $request->session()->put("feiqi_realnum",count($feiqi));

        return view("layouts.companyinfo", ["industry_big" => $industry_big,"city"=>$city]);
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
        $f->path_length = ($_POST['pathLength']==null)?0:$_POST['pathLength'];
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
    public  function GetCounty(){
        $getCounty = GetCounty::where('city_code',$_POST['citycode'])->get();
        return $getCounty;
    }

    public function Exhaustupdate(Request $request)
    {
        $state = Exhaust_temp::where('EXF_ID', $_POST['EXF_ID'])->update(array(
            'FACTORY_ID' => $request->session()->get('clientfactoryid'),
            'NK_NO' => $_POST['fabriexfno'],
            'EXF_MATERIAL' => $_POST['exfMaterial'],
            'EXF_HEIGHT' => $_POST['exfHeight'],
            'SMOKE_OUTD' => $_POST['smokeOutd'],
            'SMOKE_O_UTTE_M' => $_POST['smokeOutteM'],
            'SMOKE_OUTV' => $_POST['smokeOutv'],
            'SMOKE_OUTA' => $_POST['smokeOuta'],
            'EXF_LONGITUDE' => $_POST['exfLongitude'],
            'EXF_LATITUDE' => $_POST['exfLatitude']
        ));
        if (1) {
            $clientfactoryid = $request->session()->get("clientfactoryid");
            //$exhaust_temps = DB::select("select * from exhaust_temp where FACTORY_ID=?",[20087]);
            $exhaust_temps = Exhaust_temp::where("FACTORY_ID", $clientfactoryid)->get()->toArray();
            $totalexhaust = count($exhaust_temps);
            $request->session()->put("totalexhaust", $totalexhaust);
            $request->session()->put("exhaust_temps", $exhaust_temps);
        }
        return $state;
    }

    public function ExhaustTempdetele(Request $request)
    {
        $state = Exhaust_temp::where('EXF_ID', $_POST['cjexfid'])->delete();
        $clientfactoryid = $request->session()->get("clientfactoryid");
        //$exhaust_temps = DB::select("select * from exhaust_temp where FACTORY_ID=?",[20087]);
        $exhaust_temps = Exhaust_temp::where("FACTORY_ID", $clientfactoryid)->get()->toArray();
        $totalexhaust = count($exhaust_temps);
        $request->session()->put("totalexhaust", $totalexhaust);
        $request->session()->put("exhaust_temps", $exhaust_temps);$a = 1;
        return $state;
    }
    public function FactoryupdateFac(Request $request){
        $state = Factory::where('factory_id',$request->session()->get("clientfactoryid"))->update(array(
            'factory_usedname' => $_POST['factoryUsedname'],
            'source_type' => $_POST['sourceType'],
            'industry_bigid' => $_POST['industryBigid'],
            'industry_id' => $_POST['industryId'],
            'legalperson' => $_POST['legalperson'],
            'factory_size' => $_POST['factorySize'],
            'county_register_city' => $_POST['countyRegisterCity'],
            'countyid_register' => $_POST['countyidRegister'],
            'address_register' => $_POST['addressRegister'],
            'county_city' => $_POST['countyCity'],
            'county_id' => $_POST['countyId'],
            'address' => $_POST['address'],
            'factory_longitude' => $_POST['factoryLongitude'],
            'factory_latitude' => $_POST['factoryLatitude'],
            'total_output' => $_POST['totalOutput'],
            'Year_days' => $_POST['yearDays'],
            'Days_hours' => $_POST['daysHours'],
            'power_amount' => $_POST['powerAmount'],
            'principal_name' => $_POST['principalName'],
            'principal_phone' => $_POST['principalPhone'],
            'principal_mobile' => $_POST['principalMobile'],
            'principal_email' => $_POST['principalEmail'],
            'lon1' => $_POST['lon1'],
            'lat1' => $_POST['lat1'],
            'lon2' => $_POST['lon2'],
            'lat2' => $_POST['lat2'],
            'lon3' => $_POST['lon3'],
            'lat3' => $_POST['lat3'],
            'lon4' => $_POST['lon4'],
            'lat4' => $_POST['lat4'],
            'lon5' => $_POST['lon5'],
            'lat5' => $_POST['lat5'],
            'lon6' => $_POST['lon6'],
            'lat6' => $_POST['lat6'],
            'lon7' => $_POST['lon7'],
            'lat7' => $_POST['lat7']
        ));
        $factory = Factory::where('factory_id',$request->session()->get("clientfactoryid"))->first()->toArray();
        //$factory = Factory::where("factory_no1",'0102G001-1')->first()->toArray();
        $request->session()->put("factory",$factory);
        return $state;
    }
    function SCC2(){
        $scc2 = Scc2::where('scc_1','10')->get();
        return $scc2;
    }
    function SCC3(){
        $scc3 = Scc3::where(['scc_1'=>'10','scc_2'=>$_POST['scc2']])->get();
        $a = 1;
        return $scc3;
}
    function SCC4(){
        $scc4 = Scc4::where(['scc_1'=>'10','scc_2'=>$_POST['scc2'],'scc_3'=>$_POST['scc3']])->get();
        return $scc4;
    }
    function BoilerTempcjdetele(Request $request){
        $state = Boiler::where('ID',$_POST['cjexfid'])->delete();
        $clientfactoryid = $request->session()->get("clientfactoryid");
        $totalboiler = TotalBoiler::where('FACTORY_ID',$clientfactoryid)->get();

        $num = $totalboiler[0]['TBOILER_NUM']-1;
        $totalboiler = TotalBoiler::where('FACTORY_ID',$clientfactoryid)->update(['TBOILER_NUM'=>$num]);
        //find total guolu count by total_boiler
        $clientfactoryid = $request->session()->get("clientfactoryid");
        $totalboiler = TotalBoiler::where('FACTORY_ID',$clientfactoryid)->get();
        $boiler_temps = Boiler::where('TBOILER_ID',$totalboiler[0]['TBOILER_ID'])->get();
        $request->session()->put("boiler_temps",$boiler_temps);
        //guolu count
        $request->session()->put("boiler_num",count($boiler_temps));
        //guolu real count
        $request->session()->put("boiler_realnum",count($boiler_temps));
        return $state;
    }
    function BoilerTempupdatedb(Request $request){
        $clientfactoryid = $request->session()->get("clientfactoryid");
        $totalboiler = TotalBoiler::where('FACTORY_ID',$clientfactoryid)->get();

        $boiler = new Boiler();
        $boiler->TBOILER_ID = $totalboiler[0]['TBOILER_ID'];
        $boiler->FUNCTIO = $_POST['functio'];
        $boiler->FUELTYPE = $_POST['fueltype'];
        $boiler->MODEL = $_POST['model'];
        $boiler->installed_capacity = $_POST['installedCapacity'];
        $boiler->version = $_POST['version'];
        $boiler->machine_no = $_POST['machineNo'];
        $boiler->NO = $_POST['no'];
        $boiler->TONS = $_POST['tons'];
        $boiler->NK_NO = $_POST['exfNo'];
        $boiler->COALASH = $_POST['coalash'];
        $boiler->COALSULFUR = $_POST['coalsulfur'];
        $boiler->coal_volatilisation = $_POST['coalVolatilisation'];
        $boiler->COMBUSTIONSYSTEM = $_POST['combustionsystem'];
        $boiler->FUEL_AUSAGE = $_POST['fuelAusage'];
        $boiler->FUEL_AUSAGEUNIT = $_POST['fuelAusageunit'];
        $boiler->feiqiti = $_POST['feiqiti'];
        $boiler->so2out = $_POST['so2out'];
        $boiler->noxout = $_POST['noxout'];
        $boiler->pmout = $_POST['pmout'];
        $boiler->Jan_useamount = $_POST['janUseamount'];
        $boiler->Feb_useamount = $_POST['febUseamount'];
        $boiler->Mar_useamount = $_POST['marUseamount'];
        $boiler->Apr_useamount = $_POST['aprUseamount'];
        $boiler->May_useamount = $_POST['mayUseamount'];
        $boiler->June_useamount = $_POST['juneUseamount'];
        $boiler->July_useamount = $_POST['julyUseamount'];
        $boiler->aug_useamount = $_POST['augUseamount'];
        $boiler->sept_useamount = $_POST['septUseamount'];
        $boiler->oct_use_amount = $_POST['octUseAmount'];
        $boiler->nov_useamount = $_POST['novUseamount'];
        $boiler->dec_useamount = $_POST['decUseamount'];
        $boiler->dustremove_id = $_POST['dustremoveId'];
        $boiler->nitreremove_id = $_POST['nitreremoveId'];
        $boiler->sulphurremove_id = $_POST['sulphurremoveId'];
        $boiler->save();
        //update total_boiler

        $num = $totalboiler[0]['TBOILER_NUM']+1;
        $totalboiler->TBOILER_NUM = $num;
        $totalboiler->save();

        //find total guolu count by total_boiler;update session
        $totalboiler = TotalBoiler::where('FACTORY_ID',$clientfactoryid)->get();
        $boiler_temps = Boiler::where('TBOILER_ID',$totalboiler[0]['TBOILER_ID'])->get();
        $request->session()->put("boiler_temps",$boiler_temps);
        //guolu count
        $request->session()->put("boiler_num",count($boiler_temps));
        //guolu real count
        $request->session()->put("boiler_realnum",count($boiler_temps));
        if($boiler){ return 1;}else{return 0;}
    }
    function UploadFyarddust(Request $request){
        $file = $request->file("fyarddustfile");
        if($file->isValid()){
            $filepath = $file->getRealPath();
            $filename = $file->getClientOriginalName();
            $path = $file -> move('storage/uploads',$filename);
            $handle = fopen($path,"r");
            while($data = fgetcsv($handle,1000,",")){
                $num = count($data);
                $fyardDustTemp = new FyardDustTemp();



                $fyardDustTemp->factoryid = $data[3];
                $fyardDustTemp->material_type = $data[14];
                $fyardDustTemp->moisture_materia = $data[22];
                $fyardDustTemp->material_capacity = $data[16];
                $fyardDustTemp->loading_count = $data[17];
                $fyardDustTemp->loading_capacity = $data[20];
                $fyardDustTemp->heap_covered = $data[32];
                $fyardDustTemp->heap_area = $data[31];
                $fyardDustTemp->heap_heigh = $data[33];
                $fyardDustTemp->loading_start = $data[18];
                $fyardDustTemp->loading_time = $data[19];
                $fyardDustTemp->control_measures1 = $data[34];
                $fyardDustTemp->control_measures = $data[21];
                $fyardDustTemp->scccode = $data[1];
                $fyardDustTemp->save();
            }
        }
        $clientfactoryid = $request->session()->get("clientfactoryid");
        $fyarddust = FyardDustTemp::where("factoryid", $clientfactoryid)->get();
        return view('layouts.FyardDust', ['fyarddust' => $fyarddust]);
    }
    function DownloadFyarddust(Request $request){
        $fyarddusts = FyardDustTemp::all();
        $time = date("Y-m-d-H-i-s");
        if(!is_dir("storage/downloads")){
            mkdir("storage/downloads");
        }
        $path = "storage/downloads/".$time.".csv";
        $handle = fopen($path,"a");
        for($i=0;$i<count($fyarddusts);$i++){
            $fyarddust = $fyarddusts->get($i);
            fwrite($handle,$fyarddust["wind_dustid"].",".$fyarddust["	scccode"].",".$fyarddust["scccode1"].","
                .$fyarddust["factoryid"].",".$fyarddust["year"].",".$fyarddust["Company_Name"].","
                .$fyarddust["longitude1"].",".$fyarddust["latitude1"].",".$fyarddust["longitude2"].","
                .$fyarddust["latitude2"].",".$fyarddust["longitude3"].",".$fyarddust["latitude3"].","
                .$fyarddust["longitude4"].",".$fyarddust["latitude4"].",".$fyarddust["material_type"].","
                .$fyarddust["wind_speed"].",".$fyarddust["material_capacity"].",".$fyarddust["loading_count"].","
                .$fyarddust["loading_start"].",".$fyarddust["loading_time"].",".$fyarddust["loading_capacity"].","
                .$fyarddust["control_measures"].",".$fyarddust["moisture_materia"].",".$fyarddust["pm10_factors"].","
                .$fyarddust["pm25_factors"].",".$fyarddust["oc_factors"].",".$fyarddust["bc_factors"].","
                .$fyarddust["pm25_emission"].",".$fyarddust["pm10_emission"].",".$fyarddust["bc_emission"].","
                .$fyarddust["oc_emission"].",".$fyarddust["heap_area"].",".$fyarddust["heap_covered"].","
                .$fyarddust["heap_heigh"].",".$fyarddust["control_measures1"].",".$fyarddust["material_type1"].","
                .$fyarddust["pm10_factors1"].",".$fyarddust["oc_factors1"].",".$fyarddust["bc_factors1"].","
                .$fyarddust["pm10_emission1"].",".$fyarddust["pm25_factors1"].",".$fyarddust["pm25_emission1"].","
                .$fyarddust["oc_emission1"].",".$fyarddust["bc_emission1"].",".$fyarddust["shenhe_status"].","
                .$fyarddust["note"]
            );
            fwrite($handle,"\r\n");
        }
        fclose($handle);
        $headers = array(
            'Content-Type' => 'text/csv',
        );
        $status = response()->download($path,"file.csv",$headers);
        return $status;
    }
}
