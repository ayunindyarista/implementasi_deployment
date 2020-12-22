<?php

use Illuminate\Support\Facades\Route;
use App\Models\Kotum;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', 'AdminController@home');

// Route::get('/', function () {
//     return view('admin/admin');
// });

//layout utama
Route::get('/',\App\Http\Controllers\HomeController::class . '@home');
Route::get('/',\App\Http\Controllers\HomeController::class . '@body');
Route::get('/Dashboard',\App\Http\Controllers\HomeController::class . '@body');


//login dengan akun google
Route::get('/Login',\App\Http\Controllers\HomeController::class . '@Login');

//customer
Route::get('/Customer/DataCustomer',\App\Http\Controllers\CustomerController::class . '@index');

//tambah customer 1
Route::get('/Customer/TambahCustomer1',\App\Http\Controllers\CustomerController::class . '@create1');
Route::post('/Customer/TambahCustomer1/Save',\App\Http\Controllers\CustomerController::class . '@store1');

//tambah customer 2
Route::get('/Customer/TambahCustomer2',\App\Http\Controllers\CustomerController::class . '@create2');
Route::post('/Customer/TambahCustomer2/Save',\App\Http\Controllers\CustomerController::class . '@store2')->name("store");

//import customer
Route::post('/customer/import_excel', \App\Http\Controllers\CustomerController::class . '@importExcel')->name('import');

//data kota sesuai provinsi yang dipilih
Route::post('/Customer/data-kota',\App\Http\Controllers\CustomerController::class . '@kota');

//data kecamatan sesuai kota yang dipilih
Route::post('/Customer/data-kecamatan',\App\Http\Controllers\CustomerController::class . '@kecamatan');

//data kelurahan sesuai kecamatan yang dipilih
Route::post('/Customer/data-kelurahan',\App\Http\Controllers\CustomerController::class . '@kelurahan');

//Bacode
Route::get('/Barcode',\App\Http\Controllers\BarcodeController::class . '@barcode');
Route::get('/Barcode/Print',\App\Http\Controllers\BarcodeController::class . '@printBarcode');
Route::get('/Barcode/Scanner',\App\Http\Controllers\BarcodeController::class . '@scannerBarcode');



//Print per ID
Route::get('/Barcode/Cetak/{id}',\App\Http\Controllers\BarcodeController::class . '@print');

//Barcode data nama barang
Route::post('/Barcode/req-nama-barang',\App\Http\Controllers\BarcodeController::class . '@getNamaBarang');

//Toko
Route::get('/Toko/List_Toko',\App\Http\Controllers\LokasiTokoController::class . '@index');
//Cetak Barcode Toko
Route::get('/Toko/List_Toko/Cetak/{id}',\App\Http\Controllers\LokasiTokoController::class . '@cetak');

//Titik Awal
Route::get('/Toko/InputAwal',\App\Http\Controllers\LokasiTokoController::class . '@TitikAwal');
Route::post('/Toko/InputTitikAwal/Save',\App\Http\Controllers\LokasiTokoController::class . '@save');

//Titik Kunjungan
//scanner
Route::get('/Toko/InputKunjungan',\App\Http\Controllers\LokasiTokoController::class . '@TitikKunjung');
//Barcode data nama toko
Route::post('/Toko/req-nama-toko',\App\Http\Controllers\LokasiTokoController::class . '@getNamaToko');

//cobakk
Route::get('/Toko/Coba',\App\Http\Controllers\LokasiTokoController::class . '@coba');