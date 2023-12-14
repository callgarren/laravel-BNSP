<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aspirasi;
use App\InputAspirasi;
use App\Kategori;
use PDF;

class AspirasiController extends Controller
{
    public function index(Request $request){
        $aspirasi = InputAspirasi::all();
        $kategori = Kategori::all();
        if($request->kategori != null){
            $aspirasi = InputAspirasi::where('kategori_id', $request->kategori)->get();
        }
        return view('aspirasi.index',['aspirasi' => $aspirasi, 'kategori' => $kategori]);
    }

    public function aspirasitanggal(Request $request)
    {
        $tanggal = date("Y-m-d", strtotime($request->tanggal));
        $aspirasi = InputAspirasi::whereDate('created_at', '=', $tanggal)->get();
        $kategori = Kategori::all();
        return view('aspirasi.index', ['aspirasi' => $aspirasi, 'kategori' => $kategori]);
    }

    public function aspirasinik(Request $request)
    {
        $aspirasi = InputAspirasi::where('nik',$request->nik)->get();
        $kategori = Kategori::all();
        $nik = $request->nik;

        return view('aspirasi.index',['aspirasi' => $aspirasi, 'nik' => $nik, 'kategori' => $kategori]);
    }

    public function create(){
        
        $kategori = Kategori::all();
        return view('aspirasi.create',['aspirasi' => $kategori]);
    }
        public function store(Request $request)
        {
    
        $aspirasi = InputAspirasi::create([
         'nik' => $request->nik,
         'lokasi' => $request->lokasi,
         'ket' => $request->ket,
         'kategori_id' => $request->kategori_id
         ]);
        
         $asp = new Aspirasi;
         $asp->status = 'menunggu';
         $asp->input_aspirasi_id = $aspirasi->id;
         $asp->save();
         return redirect('/aspirasi');
        }

    
    public function edit($id)
{
   $aspirasi = InputAspirasi::find($id);
   return view('aspirasi.edit', ['aspirasi' => $aspirasi]);
}

public function update($id, Request $request)
{
    $aspirasi = Aspirasi::find($id);
    $aspirasi->feedback = $request->feedback;
    $aspirasi->status = $request->status;
    $aspirasi->save();
    
    return redirect('/aspirasi');

}
public function feedback($id){
        
    $aspirasi = Aspirasi::find($id);
    return view('aspirasi.feedback',['aspirasi' => $aspirasi]);
}
    public function feedupdate($id, Request $request)
{
    $aspirasi = Aspirasi::find($id);
    $aspirasi->feedback = $request->feedback;
    $aspirasi->save();
     return redirect('/aspirasi');
    }

    public function history(){
        $aspirasi = InputAspirasi::all();
        return view('aspirasi.history',['aspirasi' => $aspirasi]);
    }

}
