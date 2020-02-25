<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MasterPembimbingController extends Controller
{
    public function show_table_pembimbing( ){  
    	$data = DB::table('tb_pembimbing_sklh')
    	->get();
		return view ('pages.master_pembimbing',[
			'show' => $data
		]);
    }

    public function add_pembimbing(Request $request){    	
    	$insert = DB::table('tb_pembimbing_sklh')
    			->insert([
    				'nama' 		=> $request->input('nama') ,
    				'telepon' 	=> $request->input('nik'),
    				'nik'		=> $request->input('telepon'),
                    'email'     => $request->input('email'), 
                    'img'     => 'default-avatar.png',                     
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
		$id = $request->get('id_pembimbing_sklh');   	
		$get_edit = DB::table('tb_pembimbing_sklh')
				->where('id_pembimbing_sklh',$id)
				->get();
		return $get_edit;
    }

    public function update_pembimbing(Request $request)
    {
    	$update = DB::table('tb_pembimbing_sklh')
    			->where('id_pembimbing_sklh',$request->input('edit_id_pembimbing'))
    			->update([
    				'nama' 		=> $request->input('nama') ,
    				'telepon' 	=> $request->input('nik'),
    				'nik'		=> $request->input('telepon'),
                    'email'     => $request->input('email'), 
                    'img'       => 'default-avatar.png',
    				'updated_at'=> date('Y-m-d H:i:s')
    			]);
    	if ($update) {
    		return "sukses";
    	}else {
    		return "error";
    	}
    }

    public function delete_pembimbing(Request $request)
    {
    	$id = request()->get('id_pembimbing_sklh');
        $delete = DB::table('tb_pembimbing_sklh') 
               ->where('id_pembimbing_sklh',$id)
               ->delete();
        if ($delete < 0) {
            return "gagal";
        }else{
            return "sukses";
        }
    }
}
