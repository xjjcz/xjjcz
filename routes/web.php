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