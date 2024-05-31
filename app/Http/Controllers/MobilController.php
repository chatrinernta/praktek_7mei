<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;

class MobilController extends Controller
{
    public function index(){
        $mobil = MobilS::all();
       // dd($mobil);
       
  return view('mobil',compact(['mobil']));
    }
    public function create(){      
        return view('create_mobil');
    }
    public function store(Request $request){
        $student = student::create([
            'id' => $request->id,
            'merk' => $request->merk,
            'harga' => $request->harga,
            'warna' => $request->warna,
            'nomor_polisi' => $request->nomor_polisi

        ]);
        return redirect('/mobil');
    }
    public function delete($id){
        $delete = Mobil::findOrfail($id);
        $delete->delete();
        return redirect('/mobil');

    }
}


