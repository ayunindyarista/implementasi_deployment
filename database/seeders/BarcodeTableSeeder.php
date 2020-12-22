<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BarcodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        \DB::table('barcode')->delete();
        
        \DB::table('barcode')->insert(array (
            0 => 
            array (
                'ID_BARANG' => 20093001,
                'NAMA_BARANG' => 'JBL GO',
                'timestamp' => '2020-09-30 22:29:27',
            ),
            1 => 
            array (
                'ID_BARANG' => 20093002,
                'NAMA_BARANG' => 'JBL GO 2',
                'timestamp' => '2020-09-30 22:40:29',
            ),
            2 => 
            array (
                'ID_BARANG' => 20093003,
                'NAMA_BARANG' => 'SONY MDR-ZX310',
                'timestamp' => '2020-09-30 22:40:29',
            ),
            3 => 
            array (
                'ID_BARANG' => 20093004,
                'NAMA_BARANG' => 'SONY MDR-ZX110',
                'timestamp' => '2020-09-30 22:40:29',
            ),
            4 => 
            array (
                'ID_BARANG' => 20093005,
                'NAMA_BARANG' => 'SONY MDR-Z1R',
                'timestamp' => '2020-09-30 22:40:29',
            ),
            5 => 
            array (
                'ID_BARANG' => 20093006,
                'NAMA_BARANG' => 'SONY MDR-Z7',
                'timestamp' => '2020-09-30 22:40:29',
            ),
            6 => 
            array (
                'ID_BARANG' => 20093007,
                'NAMA_BARANG' => 'SONY MDR-XB950',
                'timestamp' => '2020-09-30 22:40:29',
            ),
            7 => 
            array (
                'ID_BARANG' => 20093008,
                'NAMA_BARANG' => 'SONY MDR-XB550',
                'timestamp' => '2020-09-30 22:40:29',
            ),
            8 => 
            array (
                'ID_BARANG' => 20093009,
                'NAMA_BARANG' => 'SONY WH-CH710N',
                'timestamp' => '2020-09-30 22:41:26',
            ),
            9 => 
            array (
                'ID_BARANG' => 20093010,
                'NAMA_BARANG' => 'SONY WH-CH510',
                'timestamp' => '2020-09-30 22:41:26',
            ),
        ));
    }
}
