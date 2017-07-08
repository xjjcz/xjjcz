<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Model\Dustremove;
use App\Model\Scc2;
//Route::get('/', function () {
//    return view('welcome')11;
//});
Route::get('/', "IndexController@index");
Route::get('/register', function(){
    return view('layouts.register');
});
Route::post('/auth/login', 'Auth\LoginController@getLogin');
Route::post('/auth/register', 'Auth\RegisterController@postRegister');
Route::get('/welcome', function (){
    return view("welcome");
});
Route::any('/information', "XjjczController@show");
Route::get('/test', function (){
    return view('layouts.changepsd');
});
Route::get('/home', "XjjczController@clientlist");
Route::get('/changepsd', function (){
    return view('layouts.changepsd');
});
Route::post('/changepsddo', "UserController@dochange");
Route::any('/addexhaust', function (\Illuminate\Http\Request $request){

    $totalexhaust = $request->session()->get("totalexhaust");
    $request->session()->put(["totalexhaust"=>intval($totalexhaust)+1]);
    return redirect("/exhaust/new");
});

Route::get('/exhaust/{index}', function (\Illuminate\Http\Request $request,$index){
    if($index=="new"){
        $a = 1234;
        $b = 345;
        return view('layouts.exhuast',["NUM"=>$request->session()->get("totalexhaust")]);
    }else{
        $exhaust_temps = $request->session()->get("exhaust_temps");
        $a = $exhaust_temps[0];
        return view('layouts.exhuast',["exhaust_temps"=>$exhaust_temps[$index],"NUM"=>($index+1)]);
    }
});
Route::any('/adddevice', function (\Illuminate\Http\Request $request){
    $device_num = $request->session()->get("device_num");
    $request->session()->put(["device_num"=>intval($device_num)+1]);
    return redirect("/device/new");
});

Route::get('/device/{index}', function (\Illuminate\Http\Request $request,$index){
    if($index=="new"){
        return view('layouts.device',["NUM"=>$request->session()->get("device_num")]);
    }else {
        $device_temps = $request->session()->get("device_temps");
        return view('layouts.device',["device_temp"=>$device_temps[$index],"NUM"=>($index+1)]);
    }
});
Route::any('/addraw', function (\Illuminate\Http\Request $request){
    $raw_num = $request->session()->get("raw_num");
    $request->session()->put(["raw_num"=>intval($raw_num)+1]);
    return redirect("/raw/new");
});

Route::get('/raw/{index}', function (\Illuminate\Http\Request $request,$index){
    if($index=="new"){
        return view('layouts.raw',["NUM"=>$request->session()->get("raw_num")]);
    }else {
        $raw_temps = $request->session()->get("raw_temps");
        return view('layouts.raw',["raw_temp"=>$raw_temps[$index],"NUM"=>($index+1)]);
    }
});
Route::any('/addproduct', function (\Illuminate\Http\Request $request){
    $product_num = $request->session()->get("product_num");
    $request->session()->put(["product_num"=>intval($product_num)+1]);
    return redirect("/product/new");
});

Route::get('/product/{index}', function (\Illuminate\Http\Request $request,$index){
    if($index=="new"){
        return view('layouts.product',["NUM"=>$request->session()->get("product_num")]);
    }else {
        $product_temps = $request->session()->get("product_temps");
        return view('layouts.product',["product_temp"=>$product_temps[$index],"NUM"=>($index+1)]);
    }
});
Route::any('/addboiler',function (\Illuminate\Http\Request $request){
    $boiler_num = $request->session()->get("boiler_num");
    $request->session()->put(["boiler_num"=>intval($boiler_num)+1]);
    return redirect("/boiler/new");
});
Route::any('/boiler/{index}',function (\Illuminate\Http\Request $request,$index){
    $dustremove = Dustremove::all();
    $nitreremove = \App\Model\Nitreremove::all();
    $sulphuremove = \App\Model\Sulphurremove::all();
    if ($index == "new"){
        $scc2 = Scc2::where('scc_1','10')->get();
        return view('layouts.boiler',["NUM"=>$request->session()->get("boiler_num"),'dustremove'=>$dustremove,'nitreremove'=>$nitreremove,
            'sulphuremove'=>$sulphuremove,"scc2"=>$scc2]);
    }else{
        $boiler_timps = $request->session()->get("boiler_temps");
        $scc2 = Scc2::where('scc_1','10')->get();
        return view('layouts.boiler',["boiler_temp"=>$boiler_timps[$index],"NUM"=>($index+1),'dustremove'=>$dustremove,'nitreremove'=>$nitreremove,
            'sulphuremove'=>$sulphuremove,"scc2"=>$scc2]);
    }
});
Route::any('/addfeiqi',function (\Illuminate\Http\Request $request){
    $feiqi_num = $request->session()->get("feiqi_num");
    $request->session()->put(["feiqi_num"=>intval($feiqi_num)+1]);
    return redirect("/feiqi/new");
});
Route::any('/feiqi/{index}',function (\Illuminate\Http\Request $request,$index){
    if($index == "new"){
        return view('layouts.feiqi',['NUM'=>$request->session()->get("feiqi_num")]);
    }else{
        $feiqi = $request->session()->get("feiqi");
        return view('layouts.feiqi',["feiqi"=>$feiqi[$index],"NUM"=>($index+1)]);
    }
});

Route::get('/tolistRoad',"XjjczController@roadlist");
Route::get('/toconstruction',"XjjczController@toconstruction");
Route::get('/toyarddust',"XjjczController@toyarddustlist");
Route::any('/tonoOrganizationWorkshop',"XjjczController@tonoOrganizationWorkshop");
Route::get('/zhanmentest',function (){
    return view('layouts.test');
});

Route::any('/Roadlistsave_update',"XjjczController@Roadlistsave_update");
Route::any('/Roadlistdelete',"XjjczController@Roadlistdelete");
Route::any('/Conlistdelete',"XjjczController@Conlistdelete");
Route::post('/Roadlistinsert',"XjjczController@Roadlistinsert");
Route::post('/updateCon',"XjjczController@updateCon");
Route::any('/addCon',"XjjczController@addCon");
Route::any('/addYardDust','XjjczController@addYardDust');
Route::any('/savepagesoiladd','XjjczController@savepagesoiladd');
Route::any('/savenoOrganpageadd','XjjczController@savenoOrganpageadd');
Route::any('/deleteYard',"XjjczController@deleteYard");
Route::any('/updateYard',"XjjczController@updateYard");
Route::any('/tobaresoil',"XjjczController@tobaresoil");
Route::any('/deleteSoil',"XjjczController@deleteSoil");
Route::any('/updatebareinfo',"XjjczController@updatebareinfo");
Route::any('/noOrganizationdelete',"XjjczController@noOrganizationdelete");
Route::any('/FnoOrganizationWorkshopDischargeTempupdate','XjjczController@FnoOrganizationWorkshopDischargeTempupdate');
Route::any('/ExhaustTempsaveevery','XjjczController@ExhaustTempsaveevery');
Route::any('/GetindustrySmallId','XjjczController@GetindustrySmallId');
Route::any('/Exhaustupdate','XjjczController@Exhaustupdate');
Route::any('/ExhaustTempdetele',"XjjczController@ExhaustTempdetele");
Route::any('/GetindustrySmallId',"XjjczController@GetindustrySmallId");
Route::any('/GetCounty',"XjjczController@GetCounty");
Route::any('/FactoryupdateFac','XjjczController@FactoryupdateFac');
Route::post('/SCC2','XjjczController@SCC2');
Route::any('/SCC3','XjjczController@SCC3');
Route::any('/SCC4','XjjczController@SCC4');
Route::any('/BoilerTempcjdetele','XjjczController@BoilerTempcjdetele');
Route::any('/BoilerTempupdatedb','XjjczController@BoilerTempupdatedb');
Route::post('/upload_fyarddust', 'XjjczController@UploadFyarddust');
Route::get('/downloadcsv', 'XjjczController@DownloadFyarddust');