<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MasterKelasController extends Controller
{
    public function show_table_kelas( ){  
    	$data = DB::table('tb_kelas')
    	->get();
		return view ('pages.master_kelas',[
			'show' => $data
		]);
    }

    public function add_kelas(Request $request){    	
    	$insert = DB::table('tb_kelas')
    			->insert([
    				'kelas' 	=> $request->input('kelas') ,
    				'jurusan' 	=> $request->input('jurusan'),                    
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
		$id = $request->get('id_kelas');   	
		$get_edit = DB::table('tb_kelas')
				->where('id_kelas',$id)
				->get();
		return $get_edit;
    }

    public function update_kelas(Request $request)
    {
    	$update = DB::table('tb_kelas')
    			->where('id_kelas',$request->input('edit_id'))
    			->update([
    				'kelas' 		=> $request->input('edit_kelas') ,
    				'jurusan' 	=> $request->input('jurusan'),                  
    				'updated_at'=> date('Y-m-d H:i:s')
    			]);
    	if ($update) {
    		return "sukses";
    	}else {
    		return "error";
    	}
    }

    public function delete_kelas(Request $request)
    {
    	$id = request()->get('id_kelas');
        $delete = DB::table('tb_kelas') 
               ->where('id_kelas',$id)
               ->delete();
        if ($delete < 0) {
            return "gagal";
        }else{
            return "sukses";
        }
    }
}
