<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Barcode;
use PDF;

// use DB;

class BarcodeController extends Controller
{
    public function barcode() {
        // $barang = DB::table('barang')->get();
        $barang = Barcode::all(); 
        // $pdf = App::make('dompdf.wrapper');
        // $pdf->loadHTML('<h1>Test</h1>');
        // return $pdf->stream();
        return view('/barcode/barcode')->with(compact('barang'));

    }   
    
    // public function printBarcode(){ 
    //     $barang = Barcode::limit(12)->get(); 
    //     $pdf =  PDF::loadView ('/barcode/barcode_pdf',['barang'=>$barang]); 
    //     $pdf->setPaper('a4', 'potrait'); 
    //     return $pdf->stream('barcode_pdf'); 
    // }
    
    public function printBarcode(){
        $barang = Barcode::get();
        $no = 1; 
        $paper_width = 793.7007874; // 21 cm
        $paper_height = 623.62204724; // 16.5 cm
        $paper_size = array(0, 0, $paper_width, $paper_height);
		$pdf =  PDF::loadView  ('/barcode/barcode_pdf', compact('barang', 'no')); 
		$pdf->setPaper("f4"); 
		return $pdf->stream(); 
    }

    public function print($id){
        $barang = Barcode::where('ID_BARANG', $id)->get();
        $no = 1; 
		$pdf =  PDF::loadView ('barcode/barcode_pdf_id', compact('barang', 'no')); 
		$pdf->setPaper('f4'); 
		return $pdf->stream();
    }

    public function scannerBarcode(){
        return view('/barcode/barcode_scanner');
    }

    // public function getNamaBarang(Request $request){
    //     $data = Barcode::select('NAMA_BARANG')->where("ID_BARANG",$request->id)->get();
    //     return response()->json(['data'=>$data]);
    // }

    public function getNamaBarang(){

        $id_barang = $_POST['id'];
        $data = Barcode::select('NAMA_BARANG')->where("ID_BARANG",$id_barang)->get();
        return  response()->json(['data'=>$data]);
    }

    public function insert(Request $request){
        $barang = new Barcode;
        $barang->ID_BARANG = $request->ID_BARANG;
        $barang->NAMA_BARANG = $request->NAMA_BARANG;
        $barang->save();

        return response()->json([
            "message" => "Data Barang Berhasil Di Insert"], 201);

    }

    public function update(Request $request, $id) {
        $barang = Barcode::find($id);
        $barang->NAMA_BARANG = $request->NAMA_BARANG;
        $barang->save();

        return response()->json([
            "message" => "Data Barang Berhasil Di Update"], 200);
    }

    public function delete($id){
        $barang = Barcode::find($id);
        $barang->delete();

        return response()->json([
            "message" => "Data Barang Berhasil Di Hapus"], 200);
    }

}
