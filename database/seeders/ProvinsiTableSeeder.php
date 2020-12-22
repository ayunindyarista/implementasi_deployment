<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProvinsiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('provinsi')->delete();
        
        \DB::table('provinsi')->insert(array (
            0 => 
            array (
                'ID_PROVINSI' => 1,
                'NAMA_PROVINSI' => 'Aceh',
            ),
            1 => 
            array (
                'ID_PROVINSI' => 2,
                'NAMA_PROVINSI' => 'Sumatra Utara',
            ),
            2 => 
            array (
                'ID_PROVINSI' => 3,
                'NAMA_PROVINSI' => 'Sumatra Barat',
            ),
            3 => 
            array (
                'ID_PROVINSI' => 4,
                'NAMA_PROVINSI' => 'Riau',
            ),
            4 => 
            array (
                'ID_PROVINSI' => 5,
                'NAMA_PROVINSI' => 'Jambi',
            ),
            5 => 
            array (
                'ID_PROVINSI' => 6,
                'NAMA_PROVINSI' => 'Sumatra Selatan',
            ),
            6 => 
            array (
                'ID_PROVINSI' => 7,
                'NAMA_PROVINSI' => 'Bengkulu',
            ),
            7 => 
            array (
                'ID_PROVINSI' => 8,
                'NAMA_PROVINSI' => 'Lampung',
            ),
            8 => 
            array (
                'ID_PROVINSI' => 9,
                'NAMA_PROVINSI' => 'Kepulauan Bangka Belitung',
            ),
            9 => 
            array (
                'ID_PROVINSI' => 10,
                'NAMA_PROVINSI' => 'Kepulauan Riau',
            ),
            10 => 
            array (
                'ID_PROVINSI' => 11,
                'NAMA_PROVINSI' => 'Daerah Khusus Ibukota Jakarta',
            ),
            11 => 
            array (
                'ID_PROVINSI' => 12,
                'NAMA_PROVINSI' => 'Jawa Barat',
            ),
            12 => 
            array (
                'ID_PROVINSI' => 13,
                'NAMA_PROVINSI' => 'Jawa Tengah',
            ),
            13 => 
            array (
                'ID_PROVINSI' => 14,
                'NAMA_PROVINSI' => 'Daerah Istimewa Yogyakarta',
            ),
            14 => 
            array (
                'ID_PROVINSI' => 15,
                'NAMA_PROVINSI' => 'Jawa Timur',
            ),
            15 => 
            array (
                'ID_PROVINSI' => 16,
                'NAMA_PROVINSI' => 'Banten',
            ),
            16 => 
            array (
                'ID_PROVINSI' => 17,
                'NAMA_PROVINSI' => 'Bali',
            ),
            17 => 
            array (
                'ID_PROVINSI' => 18,
                'NAMA_PROVINSI' => 'Nusa Tenggara Barat',
            ),
            18 => 
            array (
                'ID_PROVINSI' => 19,
                'NAMA_PROVINSI' => 'Nusa Tenggara Timur',
            ),
            19 => 
            array (
                'ID_PROVINSI' => 20,
                'NAMA_PROVINSI' => 'Kalimantan Barat',
            ),
            20 => 
            array (
                'ID_PROVINSI' => 21,
                'NAMA_PROVINSI' => 'Kalimantan Tengah',
            ),
            21 => 
            array (
                'ID_PROVINSI' => 22,
                'NAMA_PROVINSI' => 'Kalimantan Selatan',
            ),
            22 => 
            array (
                'ID_PROVINSI' => 23,
                'NAMA_PROVINSI' => 'Kalimantan Timur',
            ),
            23 => 
            array (
                'ID_PROVINSI' => 24,
                'NAMA_PROVINSI' => 'Kalimantan Utara',
            ),
            24 => 
            array (
                'ID_PROVINSI' => 25,
                'NAMA_PROVINSI' => 'Sulawesi Utara',
            ),
            25 => 
            array (
                'ID_PROVINSI' => 26,
                'NAMA_PROVINSI' => 'Sulawesi Tengah',
            ),
            26 => 
            array (
                'ID_PROVINSI' => 27,
                'NAMA_PROVINSI' => 'Sulawesi Selatan',
            ),
            27 => 
            array (
                'ID_PROVINSI' => 28,
                'NAMA_PROVINSI' => 'Sulawesi Tenggara',
            ),
            28 => 
            array (
                'ID_PROVINSI' => 29,
                'NAMA_PROVINSI' => 'Gorontalo',
            ),
            29 => 
            array (
                'ID_PROVINSI' => 30,
                'NAMA_PROVINSI' => 'Sulawesi Barat',
            ),
            30 => 
            array (
                'ID_PROVINSI' => 31,
                'NAMA_PROVINSI' => 'Maluku',
            ),
            31 => 
            array (
                'ID_PROVINSI' => 32,
                'NAMA_PROVINSI' => 'Maluku Utara',
            ),
            32 => 
            array (
                'ID_PROVINSI' => 33,
                'NAMA_PROVINSI' => 'Papua',
            ),
            33 => 
            array (
                'ID_PROVINSI' => 34,
                'NAMA_PROVINSI' => 'Papua Barat',
            ),
        ));
    }
}
