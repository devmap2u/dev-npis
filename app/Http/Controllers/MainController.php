<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //index
	public function index(Request $request){
		$data = [
			'title' => 'NPIS',
			'header' => 'SISTEM MAKLUMAT PROJEK KEBANGSAAN'
		];

		return view('main',[
			'data' => $data
		]);
	}
    public function dashboard(Request $request){
       $pengguna_c = Pengguna::count();
       $pengguna_c = Pengguna::count();
		return view('dashboard', compact('pengguna_c'));
	}
}
