<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MasterPembimbingMagangController extends Controller
{
    public function show_table_pembimbing_magang( ){  
    	$data = DB::table('tb_pembimbing_pkl')
    	->get();
		return view ('pages.master_pbb_pkl',[
			'show' => $data
		]);
    }

    public function add_pembimbing_magang(Request $request){    	
    	$insert = DB::table('tb_pembimbing_pkl')
    			->insert([
    				'nama_pbb_pkl' 		    => $request->input('nama_pbb_pkl') ,
    				'tgl_lahir_pbb_pkl' 	=> $request->input('tgl_lahir_pbb_pkl'),
    				'alamat_pbb_pkl'		=> $request->input('alamat_pbb_pkl'),
                    'email_pbb_pkl'         => $request->input('email_pbb_pkl'),
                    'telepon_pbb_pkl'		=> $request->input('telepon_pbb_pkl'),
                    'img_pbb_pkl'           => 'default-avatar.png',                     
    				'created_at'			=> date('Y-m-d H:i:s'),
    				'updated_at'			=> date('Y-m-d H:i:s')
    			]);	
    	if ($insert) {
    		return "sukses";
    	}else {
    		return "error";
    	}

    }

    public function get_edit(Request $request)
    {
		$id = $request->get('id_pembimbing_pkl');   	
		$get_edit = DB::table('tb_pembimbing_pkl')
				->where('id_pembimbing_pkl',$id)
				->get();
		return $get_edit;
    }

    public function update_pembimbing_magang(Request $request)
    {
    	$update = DB::table('tb_pembimbing_pkl')
    			->where('id_pembimbing_pkl',$request->input('edit_id_pembimbing_magang'))
    			->update([
    				'nama_pbb_pkl' 		    => $request->input('edit_nama_pbb_pkl') ,
    				'tgl_lahir_pbb_pkl' 	=> $request->input('edit_tgl_lahir_pbb_pkl'),
    				'alamat_pbb_pkl'		=> $request->input('edit_alamat_pbb_pkl'),
                    'email_pbb_pkl'    	    => $request->input('edit_email_pbb_pkl'),
                    'telepon_pbb_pkl'		=> $request->input('edit_telepon_pbb_pkl'),
                    'img_pbb_pkl'      	   	=> 'default-avatar.png',
    				'updated_at'			=> date('Y-m-d H:i:s')
    			]);
    	if ($update) {
    		return "sukses";
    	}else {
    		return "error";
    	}
    }

    public function delete_pembimbing_magang(Request $request)
    {
    	$id = request()->get('id_pembimbing_pkl');
        $delete = DB::table('tb_pembimbing_pkl') 
               ->where('id_pembimbing_pkl',$id)
               ->delete();
        if ($delete < 0) {
            return "gagal";
        }else{
            return "sukses";
        }
    }
}
