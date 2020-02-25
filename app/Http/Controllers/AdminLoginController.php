<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Hash;
use Validator;
use Auth;
use DB;

class AdminLoginController extends Controller
{
	public function get_login(){       
		return view ('login');
	}

	public function postLogin(Request $request)
    {
        $condition = false;
        $user = $this->find_user($request->get('username'));

        if ($user != null) {                
              if ($user->username == $request->get('username') && $user->password == $request->get('password')) {
                  $condition = true;
              }
        }     

        if ($condition) {
            Session::put('is_login', true);
            Session::put('id',$user->id);         
            Session::put('username',$user->username);
            return [
                "status" => "success",
                "redirect_route" => "dashboard" 
            ];
        }

        return [
            "status" => "error",
            "message" => "User is not valid"
        ];

    }

	public function find_user($username)
	{
		return DB::table('users')
            ->where('username', $username)        
            ->first();
	}

	public function logout(Request $request) {
        Auth::logout();
        return redirect('login');
    }
}