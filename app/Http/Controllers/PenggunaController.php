<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index(){

        $data = Pengguna::all();
        return view('pengguna', compact('data'));
    }

    public function tambahpengguna(){
        return view('tambah_pengguna');
    }

    public function insertpengguna(Request $request){
        Pengguna::create($request->all());
        return redirect()->route('pengguna')->with('success', 'Pengguna berjaya di tambah');
    }

    public function showpengguna($id){
        $data = Pengguna::find($id);
        //dd($data);
        return view('show_pengguna', compact('data'));
    }
    public function editpengguna(Request $request, $id){
        $data = Pengguna::find($id);
        $data->update($request->all());
        return redirect()->route('pengguna')->with('success', 'Pengguna berjaya di kemaskini');
    }

    public function deletepengguna($id){
        $data = Pengguna::find($id);
        $data->delete();
        return redirect()->route('pengguna')->with('success', 'Pengguna berjaya di hapus');
    }


}
