<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MasterUserController extends Controller
{
    public function show_table_user( ){  
    	$data = DB::table('users')
    	->get();
		return view ('pages.master_user',[
			'show' => $data
		]);
    }

    public function add_user(Request $request){    	
    	$insert = DB::table('users')
    			->insert([
    				'name' 		=> $request->input('nama') ,
    				'username' 	=> $request->input('username'),
    				'password'	=> $request->input('password'),
                    'role'      => $request->input('role'), 
                    'image'     => 'default-avatar.png',                     
    				'created_at'=> date('Y-m-d H:i:s'),
    				'updated_at'=> date('Y-m-d H:i:s')
    			]);	
    	if ($insert) {
    		return "sukses";
    	}else {
    		return "error";
    	}

    }

    public function get_edit(Request $request)
    {
		$id = $request->get('id_user');   	
		$get_edit = DB::table('users')
				->where('id',$id)
				->get();
		return $get_edit;
    }

    public function update_user(Request $request)
    {
    	$update = DB::table('users')
    			->where('id',$request->input('edit_id'))
    			->update([
    				'name' 		=> $request->input('edit_nama') ,
    				'username' 	=> $request->input('edit_username'),
    				'password'	=> $request->input('edit_password'),  
                    'role'      => $request->input('role'),                  
    				'updated_at'=> date('Y-m-d H:i:s')
    			]);
    	if ($update) {
    		return "sukses";
    	}else {
    		return "error";
    	}
    }

    public function delete_user(Request $request)
    {
    	$id = request()->get('id_users');
        $delete = DB::table('users') 
               ->where('id',$id)
               ->delete();
        if ($delete < 0) {
            return "gagal";
        }else{
            return "sukses";
        }
    }
}
