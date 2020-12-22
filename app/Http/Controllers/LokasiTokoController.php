<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\LokasiToko;
// use DB;
use PDF;

class LokasiTokoController extends Controller
{
    //
    public function index(){

        $toko = LokasiToko::get();
        return view('/toko/listtoko')->with(compact("toko"));

    }

    public function TitikAwal(){

        return view('toko/TitikAwal');


    }

    public function save(Request $request){
        $id = (LokasiToko::count('BARCODE'))+1;
        $id_barcode = "TOKO".str_pad($id,4,"0",STR_PAD_LEFT);
        LokasiToko::insert([
            'BARCODE'   =>  $id_barcode,
            'NAMA_TOKO' =>  $request->namatoko,
            'LATITUDE'  =>  $request->lat,
            'LONGITUDE' =>  $request->long,
            'ACURACY'   =>  $request->acc
        ]);

        return redirect('/Toko/List_Toko');

    }

    public function cetak($id){
        $toko = LokasiToko::where('BARCODE', $id)->get();
        $no = 1; 
		$pdf =  PDF::loadView ('toko/CetakListToko',  compact('toko', 'no')); 
		$pdf->setPaper('f4'); 
		return $pdf->stream();
    }

    public function TitikKunjung(){
        
        return view('toko/TitikKunjung');
    }

    public function getNamaToko(){

        $id_toko = $_POST['id'];
        $data = LokasiToko::select("NAMA_TOKO", "LATITUDE", "LONGITUDE", "ACURACY")->where("BARCODE",$id_toko)->get();
        return response()->json(['data'=>$data]);
    }

    public function coba(){
        return view('toko/cobak');
    }

    // public function getNamaToko($id){
    //     $data = Toko::select(" "," "," "," ")->where('barcode', $id)->get();
    //     return response()->json(['data'=>$data]);
    // }
}
