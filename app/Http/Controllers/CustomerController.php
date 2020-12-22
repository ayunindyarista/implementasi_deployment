<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Customer;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CustomersImport;
use DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        
        // $customer =DB::table('customer')->get();
        // $customer = Customer::get();

        $customer = Customer::with('kelurahan')->paginate(5);
        //dd();
        return view('/customer/datacustomer')->with(compact("customer")); 
        // return view('/customer/datacustomer',['customer'=>$customer]);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create1()
    {   $provinsi = Provinsi::pluck('NAMA_PROVINSI','ID_PROVINSI');
        return view('/Customer/tambahcustomer1',compact('provinsi'));
    }

    public function kota()
    {   
        $id_provinsi = $_POST['id'];
        $kota = Kota::where("ID_PROVINSI",$id_provinsi)->pluck('NAMA_KOTA','ID_KOTA');
        return  response()->json($kota);
    }

    public function kecamatan()
    {   
        $id_kota = $_POST['id'];
        $kecamatan = Kecamatan::where("ID_KOTA",$id_kota)->pluck('NAMA_KECAMATAN','ID_KECAMATAN');
        return  response()->json($kecamatan);
    }

    public function kelurahan()
    {   
        $id_kecamatan = $_POST['id'];
        $kelurahan = Kelurahan::where("ID_KECAMATAN",$id_kecamatan)->pluck('NAMA_KELURAHAN','ID_KELURAHAN');
        return  response()->json($kelurahan);
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create2()
    {   $provinsi = Provinsi::pluck('NAMA_PROVINSI','ID_PROVINSI');
        return view('/Customer/tambahcustomer2',compact('provinsi'));
    }

    public function store2(Request $request)
    {
        // dd($request);
        
        // decode base64 ke png
        $foto = $request->foto;
        $foto = str_replace('data:image/png;base64,', '', $foto);
        $foto = str_replace(' ', '+', $foto);
        $foto_png = base64_decode($foto);

        // nama foto
        $nama_foto = time(). $request->input_nama . '.png';
        $nama_foto = str_replace(' ', '_', $nama_foto);

        // path foto
        $path_foto = '/Foto/'.$nama_foto;

        // Simpan foto ke path
        \File::put(base_path().'/public/Foto/'.$nama_foto, $foto_png);

        $id = (Customer::count('ID_CUSTOMER'))+1;
        $id_cus = "CUS".str_pad($id,3,"0",STR_PAD_LEFT);
        Customer::insert([
            'ID_CUSTOMER' => $id_cus,
            'ID_KELURAHAN' => $request->kelurahan,
            'NAMA' => $request->namacust,
            'ALAMAT' => $request->alamatcust,
            'FILE_PATH' => $path_foto
        ]);
        return redirect('/Customer/DataCustomer');
        
    }

    public function store1(Request $request){

        $id = (Customer::count('ID_CUSTOMER'))+1;
        $id_cus = "CUS".str_pad($id,3,"0",STR_PAD_LEFT);
        Customer::insert([
            'ID_CUSTOMER' => $id_cus,
            'ID_KELURAHAN' => $request->kelurahan,
            'NAMA' => $request->namacust,
            'ALAMAT' => $request->alamatcust,
            // 'FOTO' => base64_encode($request->foto)
            "FOTO" => $request->foto
        ]);

        return redirect('/Customer/DataCustomer');
    }

    public function importExcel(Request $request){
        // dd($request->all());
        $request->validate([
            'data_customer' => 'required|mimes:xls',
        ]);

        $file = $request->file('data_customer')->store('import');

        // $import = new CustomersImport;
        // $import->import($file);
        
        $import = Excel::import(new CustomersImport, $file);

        // dd($import->errors());
        return back()->with('success','You have successfully insert data');
        // dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

}
