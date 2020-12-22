<?php

namespace App\Imports;

use App\Models\Customer;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;
use Throwable;

class CustomersImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        // dd($collection());
        // dd($rows);

        // dd($request);

        // dd($collection);

        foreach ($collection as $key => $row) 
        {
            if($key >= 1){
                // dd($row);
               Customer::insert([
                // return new Customer([ 
                    'ID_CUSTOMER' => $row[0],
                    'ID_KELURAHAN' => $row[3],
                    'NAMA'     => $row[1],
                    'ALAMAT'   => $row[2],
                ]);
            }
        }
    }

    public function rules(): array{
        return[
            '*.0' => ['unique:customer,ID_CUSTOMER']
        ];
    }
}
