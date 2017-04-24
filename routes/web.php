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

//Route::get('/', function () {
//    return view('welcome');
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
Route::post('/information', "XjjczController@show");
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
        return view('layouts.exhuast',["NUM"=>$request->session()->get("totalexhaust")]);
    }else {
        $exhaust_temps = $request->session()->get("exhaust_temps");
        return view('layouts.exhuast',["exhaust_temps"=>$exhaust_temps[$index],"NUM"=>($index+1)]);
    }
});



Route::get('/tolistRoad',function (){
    return view('layouts.listRoad');
});
Route::post('/listRoadlist',"XjjczController@roadlist");
Route::get('/toconstruction',function (){
    return view('layouts.constructionDust');
});
Route::get('/toyarddust',function (){
    return view('layouts.FyardDust');
});
Route::get('/tobaresoil',function(){
    return view('layouts.FbareSoilDust');
});
Route::get('/tonoOrganizationWorkshop',function (){
    return view('layouts.noOrganizationWorkshop');
});