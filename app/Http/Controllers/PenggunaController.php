<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pengguna;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index(){

        $data = User::all();
        return view('pengguna', compact('data'));
    }

    public function tambahpengguna(){
        return view('tambah_pengguna');
    }

    public function insertpengguna(Request $request){
        // User::create($request->all());
        User::create([
            'name' => $request->name,
            'ic' => $request->ic,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'jawatan' => $request->jawatan,
            'kementerian' => $request->kementerian,
            'status' => 'Aktif',
            'role' => $request->role,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        return redirect()->route('pengguna')->with('success', 'Pengguna berjaya di tambah');
    }

    public function showpengguna($id){
        $data = User::find($id);
        //dd($data);
        return view('show_pengguna', compact('data'));
    }
    public function editpengguna(Request $request, $id){
        $data = User::find($id);
        // $data->update($request->all());
        $data->update([
            'name' => $request->name,
            'ic' => $request->ic,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'jawatan' => $request->jawatan,
            'kementerian' => $request->kementerian,
            'status' => 'Aktif',
            'role' => $request->role,
            'remember_token' => Str::random(60),
        ]);
        return redirect()->route('pengguna')->with('success', 'Pengguna berjaya di kemaskini');
    }

    public function deletepengguna($id){
        $data = User::find($id);
        $data->delete();
        return redirect()->route('pengguna')->with('success', 'Pengguna berjaya di hapus');
    }
    public function mapviewer(){
        return view('mapviewer');
    }


}
