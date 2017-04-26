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
Route::get('/tolistRoad',"XjjczController@roadlist");
Route::get('/toconstruction',"XjjczController@toconstruction");
Route::get('/toyarddust',"XjjczController@toyarddustlist");
Route::any('/tonoOrganizationWorkshop',"XjjczController@tonoOrganizationWorkshop");
Route::get('/zhanmentest',function (){
    return view('layouts.a');
});
Route::any('/Roadlistsave_update',"XjjczController@Roadlistsave_update");
Route::any('/Roadlistdelete',"XjjczController@Roadlistdelete");
Route::any('/Conlistdelete',"XjjczController@Conlistdelete");
Route::post('/Roadlistinsert',"XjjczController@Roadlistinsert");
Route::post('/updateCon',"XjjczController@updateCon");
Route::any('/addCon',"XjjczController@addCon");
Route::any('/deleteYard',"XjjczController@deleteYard");
Route::any('/updateYard',"XjjczController@updateYard");
Route::any('/tobaresoil',"XjjczController@tobaresoil");
Route::any('/deleteSoil',"XjjczController@deleteSoil");
Route::any('/updatebareinfo',"XjjczController@updatebareinfo");
Route::any('/noOrganizationdelete',"XjjczController@noOrganizationdelete");
Route::any('/FnoOrganizationWorkshopDischargeTempupdate','XjjczController@FnoOrganizationWorkshopDischargeTempupdate');