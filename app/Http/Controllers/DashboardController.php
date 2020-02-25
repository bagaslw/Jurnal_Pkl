<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    public function view()
	{
		$prov=DB::table('users')
		->get();

		return view('pages.dashboard',[
			'prov' => $prov
		]);
	}
}
