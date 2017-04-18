<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\Model\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/welcome';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        //$this->middleware('guest', ['except' => 'logout']);
    }

    public function getLogin(Request $request){
        $username = $request->input("username");
        $password = $request->input("password");
        //$status =  DB::select("select * from user where username=? and password=?",[$username,$password]);
        //$status = Auth::attempt(["username"=>$username,"password"=>$password]);
        $status = User::where(["username"=>$username,"password"=>$password])->first();
        if($status){
            return redirect('/test');
        }else{
            return redirect('/');
        }
    }

}
