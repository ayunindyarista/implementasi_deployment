<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KotaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('kota')->delete();
        
        \DB::table('kota')->insert(array (
            0 => 
            array (
                'ID_KOTA' => 1,
                'ID_PROVINSI' => 1,
                'NAMA_KOTA' => 'Kabupaten Aceh Barat',
            ),
            1 => 
            array (
                'ID_KOTA' => 2,
                'ID_PROVINSI' => 1,
                'NAMA_KOTA' => 'Kabupaten Aceh Barat Daya',
            ),
            2 => 
            array (
                'ID_KOTA' => 3,
                'ID_PROVINSI' => 1,
                'NAMA_KOTA' => 'Kabupaten Aceh Besar',
            ),
            3 => 
            array (
                'ID_KOTA' => 4,
                'ID_PROVINSI' => 1,
                'NAMA_KOTA' => 'Kabupaten Aceh Jaya',
            ),
            4 => 
            array (
                'ID_KOTA' => 5,
                'ID_PROVINSI' => 1,
                'NAMA_KOTA' => 'Kabupaten Aceh Selatan',
            ),
            5 => 
            array (
                'ID_KOTA' => 6,
                'ID_PROVINSI' => 1,
                'NAMA_KOTA' => 'Kabupaten Aceh Singkil',
            ),
            6 => 
            array (
                'ID_KOTA' => 7,
                'ID_PROVINSI' => 1,
                'NAMA_KOTA' => 'Kabupaten Aceh Tamiang',
            ),
            7 => 
            array (
                'ID_KOTA' => 8,
                'ID_PROVINSI' => 1,
                'NAMA_KOTA' => 'Kabupaten Aceh Tengah',
            ),
            8 => 
            array (
                'ID_KOTA' => 9,
                'ID_PROVINSI' => 1,
                'NAMA_KOTA' => 'Kabupaten Aceh Tenggara',
            ),
            9 => 
            array (
                'ID_KOTA' => 10,
                'ID_PROVINSI' => 1,
                'NAMA_KOTA' => 'Kabupaten Aceh Timur',
            ),
            10 => 
            array (
                'ID_KOTA' => 11,
                'ID_PROVINSI' => 1,
                'NAMA_KOTA' => 'Kabupaten Aceh Utara',
            ),
            11 => 
            array (
                'ID_KOTA' => 12,
                'ID_PROVINSI' => 1,
                'NAMA_KOTA' => 'Kabupaten Bener Meriah',
            ),
            12 => 
            array (
                'ID_KOTA' => 13,
                'ID_PROVINSI' => 1,
                'NAMA_KOTA' => 'Kabupaten Bireuen',
            ),
            13 => 
            array (
                'ID_KOTA' => 14,
                'ID_PROVINSI' => 1,
                'NAMA_KOTA' => 'Kabupaten Gayo Lues',
            ),
            14 => 
            array (
                'ID_KOTA' => 15,
                'ID_PROVINSI' => 1,
                'NAMA_KOTA' => 'Kabupaten Nagan Raya',
            ),
            15 => 
            array (
                'ID_KOTA' => 16,
                'ID_PROVINSI' => 1,
                'NAMA_KOTA' => 'Kabupaten Pidie',
            ),
            16 => 
            array (
                'ID_KOTA' => 17,
                'ID_PROVINSI' => 1,
                'NAMA_KOTA' => 'Kabupaten Pidie Jaya',
            ),
            17 => 
            array (
                'ID_KOTA' => 18,
                'ID_PROVINSI' => 1,
                'NAMA_KOTA' => 'Kabupaten Simeulue',
            ),
            18 => 
            array (
                'ID_KOTA' => 19,
                'ID_PROVINSI' => 1,
                'NAMA_KOTA' => 'Kota Banda Aceh',
            ),
            19 => 
            array (
                'ID_KOTA' => 20,
                'ID_PROVINSI' => 1,
                'NAMA_KOTA' => 'Kota Langsa',
            ),
            20 => 
            array (
                'ID_KOTA' => 21,
                'ID_PROVINSI' => 1,
                'NAMA_KOTA' => 'Kota Lhokseumawe',
            ),
            21 => 
            array (
                'ID_KOTA' => 22,
                'ID_PROVINSI' => 1,
                'NAMA_KOTA' => 'Kota Sabang',
            ),
            22 => 
            array (
                'ID_KOTA' => 23,
                'ID_PROVINSI' => 1,
                'NAMA_KOTA' => 'Kota Subulussalam',
            ),
            23 => 
            array (
                'ID_KOTA' => 24,
                'ID_PROVINSI' => 2,
                'NAMA_KOTA' => 'Kabupaten Asahan',
            ),
            24 => 
            array (
                'ID_KOTA' => 25,
                'ID_PROVINSI' => 2,
                'NAMA_KOTA' => 'Kabupaten Batu Bara',
            ),
            25 => 
            array (
                'ID_KOTA' => 26,
                'ID_PROVINSI' => 2,
                'NAMA_KOTA' => 'Kabupaten Dairi',
            ),
            26 => 
            array (
                'ID_KOTA' => 27,
                'ID_PROVINSI' => 2,
                'NAMA_KOTA' => 'Kabupaten Deli Serdang',
            ),
            27 => 
            array (
                'ID_KOTA' => 28,
                'ID_PROVINSI' => 2,
                'NAMA_KOTA' => 'Kabupaten Humbang Hasundutan',
            ),
            28 => 
            array (
                'ID_KOTA' => 29,
                'ID_PROVINSI' => 2,
                'NAMA_KOTA' => 'Kabupaten Karo',
            ),
            29 => 
            array (
                'ID_KOTA' => 30,
                'ID_PROVINSI' => 2,
                'NAMA_KOTA' => 'Kabupaten Labuhanbatu',
            ),
            30 => 
            array (
                'ID_KOTA' => 31,
                'ID_PROVINSI' => 2,
                'NAMA_KOTA' => 'Kabupaten Labuhanbatu Selatan',
            ),
            31 => 
            array (
                'ID_KOTA' => 32,
                'ID_PROVINSI' => 2,
                'NAMA_KOTA' => 'Kabupaten Labuhanbatu Utara',
            ),
            32 => 
            array (
                'ID_KOTA' => 33,
                'ID_PROVINSI' => 2,
                'NAMA_KOTA' => 'Kabupaten Langkat',
            ),
            33 => 
            array (
                'ID_KOTA' => 34,
                'ID_PROVINSI' => 2,
                'NAMA_KOTA' => 'Kabupaten Mandailing Natal',
            ),
            34 => 
            array (
                'ID_KOTA' => 35,
                'ID_PROVINSI' => 2,
                'NAMA_KOTA' => 'Kabupaten Nias',
            ),
            35 => 
            array (
                'ID_KOTA' => 36,
                'ID_PROVINSI' => 2,
                'NAMA_KOTA' => 'Kabupaten Nias Barat',
            ),
            36 => 
            array (
                'ID_KOTA' => 37,
                'ID_PROVINSI' => 2,
                'NAMA_KOTA' => 'Kabupaten Nias Selatan',
            ),
            37 => 
            array (
                'ID_KOTA' => 38,
                'ID_PROVINSI' => 2,
                'NAMA_KOTA' => 'Kabupaten Nias Utara',
            ),
            38 => 
            array (
                'ID_KOTA' => 39,
                'ID_PROVINSI' => 2,
                'NAMA_KOTA' => 'Kabupaten Padang Lawas',
            ),
            39 => 
            array (
                'ID_KOTA' => 40,
                'ID_PROVINSI' => 2,
                'NAMA_KOTA' => 'Kabupaten Padang Lawas Utara',
            ),
            40 => 
            array (
                'ID_KOTA' => 41,
                'ID_PROVINSI' => 2,
                'NAMA_KOTA' => 'Kabupaten Pakpak Bharat',
            ),
            41 => 
            array (
                'ID_KOTA' => 42,
                'ID_PROVINSI' => 2,
                'NAMA_KOTA' => 'Kabupaten Samosir',
            ),
            42 => 
            array (
                'ID_KOTA' => 43,
                'ID_PROVINSI' => 2,
                'NAMA_KOTA' => 'Kabupaten Serdang Bedagai',
            ),
            43 => 
            array (
                'ID_KOTA' => 44,
                'ID_PROVINSI' => 2,
                'NAMA_KOTA' => 'Kabupaten Simalungun',
            ),
            44 => 
            array (
                'ID_KOTA' => 45,
                'ID_PROVINSI' => 2,
                'NAMA_KOTA' => 'Kabupaten Tapanuli Selatan',
            ),
            45 => 
            array (
                'ID_KOTA' => 46,
                'ID_PROVINSI' => 2,
                'NAMA_KOTA' => 'Kabupaten Tapanuli Tengah',
            ),
            46 => 
            array (
                'ID_KOTA' => 47,
                'ID_PROVINSI' => 2,
                'NAMA_KOTA' => 'Kabupaten Tapanuli Utara',
            ),
            47 => 
            array (
                'ID_KOTA' => 48,
                'ID_PROVINSI' => 2,
                'NAMA_KOTA' => 'Kabupaten Toba Samosir',
            ),
            48 => 
            array (
                'ID_KOTA' => 49,
                'ID_PROVINSI' => 2,
                'NAMA_KOTA' => 'Kota Binjai',
            ),
            49 => 
            array (
                'ID_KOTA' => 50,
                'ID_PROVINSI' => 2,
                'NAMA_KOTA' => 'Kota Gunungsitoli',
            ),
            50 => 
            array (
                'ID_KOTA' => 51,
                'ID_PROVINSI' => 2,
                'NAMA_KOTA' => 'Kota Medan',
            ),
            51 => 
            array (
                'ID_KOTA' => 52,
                'ID_PROVINSI' => 2,
                'NAMA_KOTA' => 'Kota Padang Sidempuan',
            ),
            52 => 
            array (
                'ID_KOTA' => 53,
                'ID_PROVINSI' => 2,
                'NAMA_KOTA' => 'Kota Pematangsiantar',
            ),
            53 => 
            array (
                'ID_KOTA' => 54,
                'ID_PROVINSI' => 2,
                'NAMA_KOTA' => 'Kota Sibolga',
            ),
            54 => 
            array (
                'ID_KOTA' => 55,
                'ID_PROVINSI' => 2,
                'NAMA_KOTA' => 'Kota Tanjung Balai',
            ),
            55 => 
            array (
                'ID_KOTA' => 56,
                'ID_PROVINSI' => 2,
                'NAMA_KOTA' => 'Kota Tebing Tinggi',
            ),
            56 => 
            array (
                'ID_KOTA' => 57,
                'ID_PROVINSI' => 3,
                'NAMA_KOTA' => 'Kabupaten Agam',
            ),
            57 => 
            array (
                'ID_KOTA' => 58,
                'ID_PROVINSI' => 3,
                'NAMA_KOTA' => 'Kabupaten Dharmasraya',
            ),
            58 => 
            array (
                'ID_KOTA' => 59,
                'ID_PROVINSI' => 3,
                'NAMA_KOTA' => 'Kabupaten Kepulauan Mentawai',
            ),
            59 => 
            array (
                'ID_KOTA' => 60,
                'ID_PROVINSI' => 3,
                'NAMA_KOTA' => 'Kabupaten Lima Puluh Kota',
            ),
            60 => 
            array (
                'ID_KOTA' => 61,
                'ID_PROVINSI' => 3,
                'NAMA_KOTA' => 'Kabupaten Padang Pariaman',
            ),
            61 => 
            array (
                'ID_KOTA' => 62,
                'ID_PROVINSI' => 3,
                'NAMA_KOTA' => 'Kabupaten Pasaman',
            ),
            62 => 
            array (
                'ID_KOTA' => 63,
                'ID_PROVINSI' => 3,
                'NAMA_KOTA' => 'Kabupaten Pasaman Barat',
            ),
            63 => 
            array (
                'ID_KOTA' => 64,
                'ID_PROVINSI' => 3,
                'NAMA_KOTA' => 'Kabupaten Pesisir Selatan',
            ),
            64 => 
            array (
                'ID_KOTA' => 65,
                'ID_PROVINSI' => 3,
            'NAMA_KOTA' => 'Kabupaten Sijunjung (Sawah Lunto Sijunjung)',
            ),
            65 => 
            array (
                'ID_KOTA' => 66,
                'ID_PROVINSI' => 3,
                'NAMA_KOTA' => 'Kabupaten Solok',
            ),
            66 => 
            array (
                'ID_KOTA' => 67,
                'ID_PROVINSI' => 3,
                'NAMA_KOTA' => 'Kabupaten Solok Selatan',
            ),
            67 => 
            array (
                'ID_KOTA' => 68,
                'ID_PROVINSI' => 3,
                'NAMA_KOTA' => 'Kabupaten Tanah Datar',
            ),
            68 => 
            array (
                'ID_KOTA' => 69,
                'ID_PROVINSI' => 3,
                'NAMA_KOTA' => 'Kota Bukittinggi',
            ),
            69 => 
            array (
                'ID_KOTA' => 70,
                'ID_PROVINSI' => 3,
                'NAMA_KOTA' => 'Kota Padang',
            ),
            70 => 
            array (
                'ID_KOTA' => 71,
                'ID_PROVINSI' => 3,
                'NAMA_KOTA' => 'Kota Padang Panjang',
            ),
            71 => 
            array (
                'ID_KOTA' => 72,
                'ID_PROVINSI' => 3,
                'NAMA_KOTA' => 'Kota Pariaman',
            ),
            72 => 
            array (
                'ID_KOTA' => 73,
                'ID_PROVINSI' => 3,
                'NAMA_KOTA' => 'Kota Payakumbuh',
            ),
            73 => 
            array (
                'ID_KOTA' => 74,
                'ID_PROVINSI' => 3,
                'NAMA_KOTA' => 'Kota Sawahlunto',
            ),
            74 => 
            array (
                'ID_KOTA' => 75,
                'ID_PROVINSI' => 3,
                'NAMA_KOTA' => 'Kota Solok',
            ),
            75 => 
            array (
                'ID_KOTA' => 76,
                'ID_PROVINSI' => 4,
                'NAMA_KOTA' => 'Kabupaten Bengkalis',
            ),
            76 => 
            array (
                'ID_KOTA' => 77,
                'ID_PROVINSI' => 4,
                'NAMA_KOTA' => 'Kabupaten Indragiri Hilir',
            ),
            77 => 
            array (
                'ID_KOTA' => 78,
                'ID_PROVINSI' => 4,
                'NAMA_KOTA' => 'Kabupaten Indragiri Hulu',
            ),
            78 => 
            array (
                'ID_KOTA' => 79,
                'ID_PROVINSI' => 4,
                'NAMA_KOTA' => 'Kabupaten Kampar',
            ),
            79 => 
            array (
                'ID_KOTA' => 80,
                'ID_PROVINSI' => 4,
                'NAMA_KOTA' => 'Kabupaten Kepulauan Meranti',
            ),
            80 => 
            array (
                'ID_KOTA' => 81,
                'ID_PROVINSI' => 4,
                'NAMA_KOTA' => 'Kabupaten Kuantan Singingi',
            ),
            81 => 
            array (
                'ID_KOTA' => 82,
                'ID_PROVINSI' => 4,
                'NAMA_KOTA' => 'Kabupaten Pelalawan',
            ),
            82 => 
            array (
                'ID_KOTA' => 83,
                'ID_PROVINSI' => 4,
                'NAMA_KOTA' => 'Kabupaten Rokan Hilir',
            ),
            83 => 
            array (
                'ID_KOTA' => 84,
                'ID_PROVINSI' => 4,
                'NAMA_KOTA' => 'Kabupaten Rokan Hulu',
            ),
            84 => 
            array (
                'ID_KOTA' => 85,
                'ID_PROVINSI' => 4,
                'NAMA_KOTA' => 'Kabupaten Siak',
            ),
            85 => 
            array (
                'ID_KOTA' => 86,
                'ID_PROVINSI' => 4,
                'NAMA_KOTA' => 'Kota Dumai',
            ),
            86 => 
            array (
                'ID_KOTA' => 87,
                'ID_PROVINSI' => 4,
                'NAMA_KOTA' => 'Kota Pekanbaru',
            ),
            87 => 
            array (
                'ID_KOTA' => 88,
                'ID_PROVINSI' => 5,
                'NAMA_KOTA' => 'Kabupaten Batanghari',
            ),
            88 => 
            array (
                'ID_KOTA' => 89,
                'ID_PROVINSI' => 5,
                'NAMA_KOTA' => 'Kabupaten Bungo',
            ),
            89 => 
            array (
                'ID_KOTA' => 90,
                'ID_PROVINSI' => 5,
                'NAMA_KOTA' => 'Kabupaten Kerinci',
            ),
            90 => 
            array (
                'ID_KOTA' => 91,
                'ID_PROVINSI' => 5,
                'NAMA_KOTA' => 'Kabupaten Merangin',
            ),
            91 => 
            array (
                'ID_KOTA' => 92,
                'ID_PROVINSI' => 5,
                'NAMA_KOTA' => 'Kabupaten Muaro Jambi',
            ),
            92 => 
            array (
                'ID_KOTA' => 93,
                'ID_PROVINSI' => 5,
                'NAMA_KOTA' => 'Kabupaten Sarolangun',
            ),
            93 => 
            array (
                'ID_KOTA' => 94,
                'ID_PROVINSI' => 5,
                'NAMA_KOTA' => 'Kabupaten Tanjung Jabung Barat',
            ),
            94 => 
            array (
                'ID_KOTA' => 95,
                'ID_PROVINSI' => 5,
                'NAMA_KOTA' => 'Kabupaten Tanjung Jabung Timur',
            ),
            95 => 
            array (
                'ID_KOTA' => 96,
                'ID_PROVINSI' => 5,
                'NAMA_KOTA' => 'Kabupaten Tebo',
            ),
            96 => 
            array (
                'ID_KOTA' => 97,
                'ID_PROVINSI' => 5,
                'NAMA_KOTA' => 'Kota Jambi',
            ),
            97 => 
            array (
                'ID_KOTA' => 98,
                'ID_PROVINSI' => 5,
                'NAMA_KOTA' => 'Kota Sungai Penuh',
            ),
            98 => 
            array (
                'ID_KOTA' => 99,
                'ID_PROVINSI' => 6,
                'NAMA_KOTA' => 'Kabupaten Banyuasin',
            ),
            99 => 
            array (
                'ID_KOTA' => 100,
                'ID_PROVINSI' => 6,
                'NAMA_KOTA' => 'Kabupaten Empat Lawang',
            ),
            100 => 
            array (
                'ID_KOTA' => 101,
                'ID_PROVINSI' => 6,
                'NAMA_KOTA' => 'Kabupaten Lahat',
            ),
            101 => 
            array (
                'ID_KOTA' => 102,
                'ID_PROVINSI' => 6,
                'NAMA_KOTA' => 'Kabupaten Muara Enim',
            ),
            102 => 
            array (
                'ID_KOTA' => 103,
                'ID_PROVINSI' => 6,
                'NAMA_KOTA' => 'Kabupaten Musi Banyuasin',
            ),
            103 => 
            array (
                'ID_KOTA' => 104,
                'ID_PROVINSI' => 6,
                'NAMA_KOTA' => 'Kabupaten Musi Rawas',
            ),
            104 => 
            array (
                'ID_KOTA' => 105,
                'ID_PROVINSI' => 6,
                'NAMA_KOTA' => 'Kabupaten Musi Rawas Utara',
            ),
            105 => 
            array (
                'ID_KOTA' => 106,
                'ID_PROVINSI' => 6,
                'NAMA_KOTA' => 'Kabupaten Ogan Ilir',
            ),
            106 => 
            array (
                'ID_KOTA' => 107,
                'ID_PROVINSI' => 6,
                'NAMA_KOTA' => 'Kabupaten Ogan Komering Ilir',
            ),
            107 => 
            array (
                'ID_KOTA' => 108,
                'ID_PROVINSI' => 6,
                'NAMA_KOTA' => 'Kabupaten Ogan Komering Ulu',
            ),
            108 => 
            array (
                'ID_KOTA' => 109,
                'ID_PROVINSI' => 6,
            'NAMA_KOTA' => 'Kabupaten Ogan Komering Ulu Selatan (Oku Selatan)',
            ),
            109 => 
            array (
                'ID_KOTA' => 110,
                'ID_PROVINSI' => 6,
            'NAMA_KOTA' => 'Kabupaten Ogan Komering Ulu Timur (Oku Timur)',
            ),
            110 => 
            array (
                'ID_KOTA' => 111,
                'ID_PROVINSI' => 6,
                'NAMA_KOTA' => 'Kabupaten Penukal Abab Lematang Ilir',
            ),
            111 => 
            array (
                'ID_KOTA' => 112,
                'ID_PROVINSI' => 6,
                'NAMA_KOTA' => 'Kota Lubuk Linggau',
            ),
            112 => 
            array (
                'ID_KOTA' => 113,
                'ID_PROVINSI' => 6,
                'NAMA_KOTA' => 'Kota Pagar Alam',
            ),
            113 => 
            array (
                'ID_KOTA' => 114,
                'ID_PROVINSI' => 6,
                'NAMA_KOTA' => 'Kota Palembang',
            ),
            114 => 
            array (
                'ID_KOTA' => 115,
                'ID_PROVINSI' => 6,
                'NAMA_KOTA' => 'Kota Prabumulih',
            ),
            115 => 
            array (
                'ID_KOTA' => 116,
                'ID_PROVINSI' => 7,
                'NAMA_KOTA' => 'Kabupaten Bengkulu Selatan',
            ),
            116 => 
            array (
                'ID_KOTA' => 117,
                'ID_PROVINSI' => 7,
                'NAMA_KOTA' => 'Kabupaten Bengkulu Tengah',
            ),
            117 => 
            array (
                'ID_KOTA' => 118,
                'ID_PROVINSI' => 7,
                'NAMA_KOTA' => 'Kabupaten Bengkulu Utara',
            ),
            118 => 
            array (
                'ID_KOTA' => 119,
                'ID_PROVINSI' => 7,
                'NAMA_KOTA' => 'Kabupaten Kaur',
            ),
            119 => 
            array (
                'ID_KOTA' => 120,
                'ID_PROVINSI' => 7,
                'NAMA_KOTA' => 'Kabupaten Kepahiang',
            ),
            120 => 
            array (
                'ID_KOTA' => 121,
                'ID_PROVINSI' => 7,
                'NAMA_KOTA' => 'Kabupaten Lebong',
            ),
            121 => 
            array (
                'ID_KOTA' => 122,
                'ID_PROVINSI' => 7,
                'NAMA_KOTA' => 'Kabupaten Muko Muko',
            ),
            122 => 
            array (
                'ID_KOTA' => 123,
                'ID_PROVINSI' => 7,
                'NAMA_KOTA' => 'Kabupaten Rejang Lebong',
            ),
            123 => 
            array (
                'ID_KOTA' => 124,
                'ID_PROVINSI' => 7,
                'NAMA_KOTA' => 'Kabupaten Seluma',
            ),
            124 => 
            array (
                'ID_KOTA' => 125,
                'ID_PROVINSI' => 7,
                'NAMA_KOTA' => 'Kota Bengkulu',
            ),
            125 => 
            array (
                'ID_KOTA' => 126,
                'ID_PROVINSI' => 8,
                'NAMA_KOTA' => 'Kabupaten Lampung Barat',
            ),
            126 => 
            array (
                'ID_KOTA' => 127,
                'ID_PROVINSI' => 8,
                'NAMA_KOTA' => 'Kabupaten Lampung Selatan',
            ),
            127 => 
            array (
                'ID_KOTA' => 128,
                'ID_PROVINSI' => 8,
                'NAMA_KOTA' => 'Kabupaten Lampung Tengah',
            ),
            128 => 
            array (
                'ID_KOTA' => 129,
                'ID_PROVINSI' => 8,
                'NAMA_KOTA' => 'Kabupaten Lampung Timur',
            ),
            129 => 
            array (
                'ID_KOTA' => 130,
                'ID_PROVINSI' => 8,
                'NAMA_KOTA' => 'Kabupaten Lampung Utara',
            ),
            130 => 
            array (
                'ID_KOTA' => 131,
                'ID_PROVINSI' => 8,
                'NAMA_KOTA' => 'Kabupaten Mesuji',
            ),
            131 => 
            array (
                'ID_KOTA' => 132,
                'ID_PROVINSI' => 8,
                'NAMA_KOTA' => 'Kabupaten Pesawaran',
            ),
            132 => 
            array (
                'ID_KOTA' => 133,
                'ID_PROVINSI' => 8,
                'NAMA_KOTA' => 'Kabupaten Pesisir Barat',
            ),
            133 => 
            array (
                'ID_KOTA' => 134,
                'ID_PROVINSI' => 8,
                'NAMA_KOTA' => 'Kabupaten Pringsewu',
            ),
            134 => 
            array (
                'ID_KOTA' => 135,
                'ID_PROVINSI' => 8,
                'NAMA_KOTA' => 'Kabupaten Tanggamus',
            ),
            135 => 
            array (
                'ID_KOTA' => 136,
                'ID_PROVINSI' => 8,
                'NAMA_KOTA' => 'Kabupaten Tulang Bawang',
            ),
            136 => 
            array (
                'ID_KOTA' => 137,
                'ID_PROVINSI' => 8,
                'NAMA_KOTA' => 'Kabupaten Tulang Bawang Barat',
            ),
            137 => 
            array (
                'ID_KOTA' => 138,
                'ID_PROVINSI' => 8,
                'NAMA_KOTA' => 'Kabupaten Way Kanan',
            ),
            138 => 
            array (
                'ID_KOTA' => 139,
                'ID_PROVINSI' => 8,
                'NAMA_KOTA' => 'Kota Bandar Lampung',
            ),
            139 => 
            array (
                'ID_KOTA' => 140,
                'ID_PROVINSI' => 8,
                'NAMA_KOTA' => 'Kota Metro',
            ),
            140 => 
            array (
                'ID_KOTA' => 141,
                'ID_PROVINSI' => 9,
                'NAMA_KOTA' => 'Kabupaten Bangka',
            ),
            141 => 
            array (
                'ID_KOTA' => 142,
                'ID_PROVINSI' => 9,
                'NAMA_KOTA' => 'Kabupaten Bangka Barat',
            ),
            142 => 
            array (
                'ID_KOTA' => 143,
                'ID_PROVINSI' => 9,
                'NAMA_KOTA' => 'Kabupaten Bangka Selatan',
            ),
            143 => 
            array (
                'ID_KOTA' => 144,
                'ID_PROVINSI' => 9,
                'NAMA_KOTA' => 'Kabupaten Bangka Tengah',
            ),
            144 => 
            array (
                'ID_KOTA' => 145,
                'ID_PROVINSI' => 9,
                'NAMA_KOTA' => 'Kabupaten Belitung',
            ),
            145 => 
            array (
                'ID_KOTA' => 146,
                'ID_PROVINSI' => 9,
                'NAMA_KOTA' => 'Kabupaten Belitung Timur',
            ),
            146 => 
            array (
                'ID_KOTA' => 147,
                'ID_PROVINSI' => 9,
                'NAMA_KOTA' => 'Kota Pangkal Pinang',
            ),
            147 => 
            array (
                'ID_KOTA' => 148,
                'ID_PROVINSI' => 10,
                'NAMA_KOTA' => 'Kabupaten Bintan',
            ),
            148 => 
            array (
                'ID_KOTA' => 149,
                'ID_PROVINSI' => 10,
                'NAMA_KOTA' => 'Kabupaten Karimun',
            ),
            149 => 
            array (
                'ID_KOTA' => 150,
                'ID_PROVINSI' => 10,
                'NAMA_KOTA' => 'Kabupaten Kepulauan Anambas',
            ),
            150 => 
            array (
                'ID_KOTA' => 151,
                'ID_PROVINSI' => 10,
                'NAMA_KOTA' => 'Kabupaten Lingga',
            ),
            151 => 
            array (
                'ID_KOTA' => 152,
                'ID_PROVINSI' => 10,
                'NAMA_KOTA' => 'Kabupaten Natuna',
            ),
            152 => 
            array (
                'ID_KOTA' => 153,
                'ID_PROVINSI' => 10,
                'NAMA_KOTA' => 'Kota Batam',
            ),
            153 => 
            array (
                'ID_KOTA' => 154,
                'ID_PROVINSI' => 10,
                'NAMA_KOTA' => 'Kota Tanjung Pinang',
            ),
            154 => 
            array (
                'ID_KOTA' => 155,
                'ID_PROVINSI' => 11,
                'NAMA_KOTA' => 'Kabupaten Adm. Kepulauan Seribu',
            ),
            155 => 
            array (
                'ID_KOTA' => 156,
                'ID_PROVINSI' => 11,
                'NAMA_KOTA' => 'Kota Adm. Jakarta Barat',
            ),
            156 => 
            array (
                'ID_KOTA' => 157,
                'ID_PROVINSI' => 11,
                'NAMA_KOTA' => 'Kota Adm. Jakarta Pusat',
            ),
            157 => 
            array (
                'ID_KOTA' => 158,
                'ID_PROVINSI' => 11,
                'NAMA_KOTA' => 'Kota Adm. Jakarta Selatan',
            ),
            158 => 
            array (
                'ID_KOTA' => 159,
                'ID_PROVINSI' => 11,
                'NAMA_KOTA' => 'Kota Adm. Jakarta Timur',
            ),
            159 => 
            array (
                'ID_KOTA' => 160,
                'ID_PROVINSI' => 11,
                'NAMA_KOTA' => 'Kota Adm. Jakarta Utara',
            ),
            160 => 
            array (
                'ID_KOTA' => 161,
                'ID_PROVINSI' => 12,
                'NAMA_KOTA' => 'Kabupaten Bandung',
            ),
            161 => 
            array (
                'ID_KOTA' => 162,
                'ID_PROVINSI' => 12,
                'NAMA_KOTA' => 'Kabupaten Bandung Barat',
            ),
            162 => 
            array (
                'ID_KOTA' => 163,
                'ID_PROVINSI' => 12,
                'NAMA_KOTA' => 'Kabupaten Bekasi',
            ),
            163 => 
            array (
                'ID_KOTA' => 164,
                'ID_PROVINSI' => 12,
                'NAMA_KOTA' => 'Kabupaten Bogor',
            ),
            164 => 
            array (
                'ID_KOTA' => 165,
                'ID_PROVINSI' => 12,
                'NAMA_KOTA' => 'Kabupaten Ciamis',
            ),
            165 => 
            array (
                'ID_KOTA' => 166,
                'ID_PROVINSI' => 12,
                'NAMA_KOTA' => 'Kabupaten Cianjur',
            ),
            166 => 
            array (
                'ID_KOTA' => 167,
                'ID_PROVINSI' => 12,
                'NAMA_KOTA' => 'Kabupaten Cirebon',
            ),
            167 => 
            array (
                'ID_KOTA' => 168,
                'ID_PROVINSI' => 12,
                'NAMA_KOTA' => 'Kabupaten Garut',
            ),
            168 => 
            array (
                'ID_KOTA' => 169,
                'ID_PROVINSI' => 12,
                'NAMA_KOTA' => 'Kabupaten Indramayu',
            ),
            169 => 
            array (
                'ID_KOTA' => 170,
                'ID_PROVINSI' => 12,
                'NAMA_KOTA' => 'Kabupaten Karawang',
            ),
            170 => 
            array (
                'ID_KOTA' => 171,
                'ID_PROVINSI' => 12,
                'NAMA_KOTA' => 'Kabupaten Kuningan',
            ),
            171 => 
            array (
                'ID_KOTA' => 172,
                'ID_PROVINSI' => 12,
                'NAMA_KOTA' => 'Kabupaten Majalengka',
            ),
            172 => 
            array (
                'ID_KOTA' => 173,
                'ID_PROVINSI' => 12,
                'NAMA_KOTA' => 'Kabupaten Pangandaran',
            ),
            173 => 
            array (
                'ID_KOTA' => 174,
                'ID_PROVINSI' => 12,
                'NAMA_KOTA' => 'Kabupaten Purwakarta',
            ),
            174 => 
            array (
                'ID_KOTA' => 175,
                'ID_PROVINSI' => 12,
                'NAMA_KOTA' => 'Kabupaten Subang',
            ),
            175 => 
            array (
                'ID_KOTA' => 176,
                'ID_PROVINSI' => 12,
                'NAMA_KOTA' => 'Kabupaten Sukabumi',
            ),
            176 => 
            array (
                'ID_KOTA' => 177,
                'ID_PROVINSI' => 12,
                'NAMA_KOTA' => 'Kabupaten Sumedang',
            ),
            177 => 
            array (
                'ID_KOTA' => 178,
                'ID_PROVINSI' => 12,
                'NAMA_KOTA' => 'Kabupaten Tasikmalaya',
            ),
            178 => 
            array (
                'ID_KOTA' => 179,
                'ID_PROVINSI' => 12,
                'NAMA_KOTA' => 'Kota Bandung',
            ),
            179 => 
            array (
                'ID_KOTA' => 180,
                'ID_PROVINSI' => 12,
                'NAMA_KOTA' => 'Kota Banjar',
            ),
            180 => 
            array (
                'ID_KOTA' => 181,
                'ID_PROVINSI' => 12,
                'NAMA_KOTA' => 'Kota Bekasi',
            ),
            181 => 
            array (
                'ID_KOTA' => 182,
                'ID_PROVINSI' => 12,
                'NAMA_KOTA' => 'Kota Bogor',
            ),
            182 => 
            array (
                'ID_KOTA' => 183,
                'ID_PROVINSI' => 12,
                'NAMA_KOTA' => 'Kota Cimahi',
            ),
            183 => 
            array (
                'ID_KOTA' => 184,
                'ID_PROVINSI' => 12,
                'NAMA_KOTA' => 'Kota Cirebon',
            ),
            184 => 
            array (
                'ID_KOTA' => 185,
                'ID_PROVINSI' => 12,
                'NAMA_KOTA' => 'Kota Depok',
            ),
            185 => 
            array (
                'ID_KOTA' => 186,
                'ID_PROVINSI' => 12,
                'NAMA_KOTA' => 'Kota Sukabumi',
            ),
            186 => 
            array (
                'ID_KOTA' => 187,
                'ID_PROVINSI' => 12,
                'NAMA_KOTA' => 'Kota Tasikmalaya',
            ),
            187 => 
            array (
                'ID_KOTA' => 188,
                'ID_PROVINSI' => 13,
                'NAMA_KOTA' => 'Kabupaten Banjarnegara',
            ),
            188 => 
            array (
                'ID_KOTA' => 189,
                'ID_PROVINSI' => 13,
                'NAMA_KOTA' => 'Kabupaten Banyumas',
            ),
            189 => 
            array (
                'ID_KOTA' => 190,
                'ID_PROVINSI' => 13,
                'NAMA_KOTA' => 'Kabupaten Batang',
            ),
            190 => 
            array (
                'ID_KOTA' => 191,
                'ID_PROVINSI' => 13,
                'NAMA_KOTA' => 'Kabupaten Blora',
            ),
            191 => 
            array (
                'ID_KOTA' => 192,
                'ID_PROVINSI' => 13,
                'NAMA_KOTA' => 'Kabupaten Boyolali',
            ),
            192 => 
            array (
                'ID_KOTA' => 193,
                'ID_PROVINSI' => 13,
                'NAMA_KOTA' => 'Kabupaten Brebes',
            ),
            193 => 
            array (
                'ID_KOTA' => 194,
                'ID_PROVINSI' => 13,
                'NAMA_KOTA' => 'Kabupaten Cilacap',
            ),
            194 => 
            array (
                'ID_KOTA' => 195,
                'ID_PROVINSI' => 13,
                'NAMA_KOTA' => 'Kabupaten Demak',
            ),
            195 => 
            array (
                'ID_KOTA' => 196,
                'ID_PROVINSI' => 13,
                'NAMA_KOTA' => 'Kabupaten Grobogan',
            ),
            196 => 
            array (
                'ID_KOTA' => 197,
                'ID_PROVINSI' => 13,
                'NAMA_KOTA' => 'Kabupaten Jepara',
            ),
            197 => 
            array (
                'ID_KOTA' => 198,
                'ID_PROVINSI' => 13,
                'NAMA_KOTA' => 'Kabupaten Karanganyar',
            ),
            198 => 
            array (
                'ID_KOTA' => 199,
                'ID_PROVINSI' => 13,
                'NAMA_KOTA' => 'Kabupaten Kebumen',
            ),
            199 => 
            array (
                'ID_KOTA' => 200,
                'ID_PROVINSI' => 13,
                'NAMA_KOTA' => 'Kabupaten Kendal',
            ),
            200 => 
            array (
                'ID_KOTA' => 201,
                'ID_PROVINSI' => 13,
                'NAMA_KOTA' => 'Kabupaten Klaten',
            ),
            201 => 
            array (
                'ID_KOTA' => 202,
                'ID_PROVINSI' => 13,
                'NAMA_KOTA' => 'Kabupaten Kudus',
            ),
            202 => 
            array (
                'ID_KOTA' => 203,
                'ID_PROVINSI' => 13,
                'NAMA_KOTA' => 'Kabupaten Magelang',
            ),
            203 => 
            array (
                'ID_KOTA' => 204,
                'ID_PROVINSI' => 13,
                'NAMA_KOTA' => 'Kabupaten Pati',
            ),
            204 => 
            array (
                'ID_KOTA' => 205,
                'ID_PROVINSI' => 13,
                'NAMA_KOTA' => 'Kabupaten Pekalongan',
            ),
            205 => 
            array (
                'ID_KOTA' => 206,
                'ID_PROVINSI' => 13,
                'NAMA_KOTA' => 'Kabupaten Pemalang',
            ),
            206 => 
            array (
                'ID_KOTA' => 207,
                'ID_PROVINSI' => 13,
                'NAMA_KOTA' => 'Kabupaten Purbalingga',
            ),
            207 => 
            array (
                'ID_KOTA' => 208,
                'ID_PROVINSI' => 13,
                'NAMA_KOTA' => 'Kabupaten Purworejo',
            ),
            208 => 
            array (
                'ID_KOTA' => 209,
                'ID_PROVINSI' => 13,
                'NAMA_KOTA' => 'Kabupaten Rembang',
            ),
            209 => 
            array (
                'ID_KOTA' => 210,
                'ID_PROVINSI' => 13,
                'NAMA_KOTA' => 'Kabupaten Semarang',
            ),
            210 => 
            array (
                'ID_KOTA' => 211,
                'ID_PROVINSI' => 13,
                'NAMA_KOTA' => 'Kabupaten Sragen',
            ),
            211 => 
            array (
                'ID_KOTA' => 212,
                'ID_PROVINSI' => 13,
                'NAMA_KOTA' => 'Kabupaten Sukoharjo',
            ),
            212 => 
            array (
                'ID_KOTA' => 213,
                'ID_PROVINSI' => 13,
                'NAMA_KOTA' => 'Kabupaten Tegal',
            ),
            213 => 
            array (
                'ID_KOTA' => 214,
                'ID_PROVINSI' => 13,
                'NAMA_KOTA' => 'Kabupaten Temanggung',
            ),
            214 => 
            array (
                'ID_KOTA' => 215,
                'ID_PROVINSI' => 13,
                'NAMA_KOTA' => 'Kabupaten Wonogiri',
            ),
            215 => 
            array (
                'ID_KOTA' => 216,
                'ID_PROVINSI' => 13,
                'NAMA_KOTA' => 'Kabupaten Wonosobo',
            ),
            216 => 
            array (
                'ID_KOTA' => 217,
                'ID_PROVINSI' => 13,
                'NAMA_KOTA' => 'Kota Magelang',
            ),
            217 => 
            array (
                'ID_KOTA' => 218,
                'ID_PROVINSI' => 13,
                'NAMA_KOTA' => 'Kota Pekalongan',
            ),
            218 => 
            array (
                'ID_KOTA' => 219,
                'ID_PROVINSI' => 13,
                'NAMA_KOTA' => 'Kota Salatiga',
            ),
            219 => 
            array (
                'ID_KOTA' => 220,
                'ID_PROVINSI' => 13,
                'NAMA_KOTA' => 'Kota Semarang',
            ),
            220 => 
            array (
                'ID_KOTA' => 221,
                'ID_PROVINSI' => 13,
            'NAMA_KOTA' => 'Kota Surakarta (Solo)',
            ),
            221 => 
            array (
                'ID_KOTA' => 222,
                'ID_PROVINSI' => 13,
                'NAMA_KOTA' => 'Kota Tegal',
            ),
            222 => 
            array (
                'ID_KOTA' => 223,
                'ID_PROVINSI' => 14,
                'NAMA_KOTA' => 'Kabupaten Bantul',
            ),
            223 => 
            array (
                'ID_KOTA' => 224,
                'ID_PROVINSI' => 14,
                'NAMA_KOTA' => 'Kabupaten Gunung Kidul',
            ),
            224 => 
            array (
                'ID_KOTA' => 225,
                'ID_PROVINSI' => 14,
                'NAMA_KOTA' => 'Kabupaten Kulon Progo',
            ),
            225 => 
            array (
                'ID_KOTA' => 226,
                'ID_PROVINSI' => 14,
                'NAMA_KOTA' => 'Kabupaten Sleman',
            ),
            226 => 
            array (
                'ID_KOTA' => 227,
                'ID_PROVINSI' => 14,
                'NAMA_KOTA' => 'Kota Yogyakarta',
            ),
            227 => 
            array (
                'ID_KOTA' => 228,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kabupaten Bangkalan',
            ),
            228 => 
            array (
                'ID_KOTA' => 229,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kabupaten Banyuwangi',
            ),
            229 => 
            array (
                'ID_KOTA' => 230,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kabupaten Blitar',
            ),
            230 => 
            array (
                'ID_KOTA' => 231,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kabupaten Bojonegoro',
            ),
            231 => 
            array (
                'ID_KOTA' => 232,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kabupaten Bondowoso',
            ),
            232 => 
            array (
                'ID_KOTA' => 233,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kabupaten Gresik',
            ),
            233 => 
            array (
                'ID_KOTA' => 234,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kabupaten Jember',
            ),
            234 => 
            array (
                'ID_KOTA' => 235,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kabupaten Jombang',
            ),
            235 => 
            array (
                'ID_KOTA' => 236,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kabupaten Kediri',
            ),
            236 => 
            array (
                'ID_KOTA' => 237,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kabupaten Lamongan',
            ),
            237 => 
            array (
                'ID_KOTA' => 238,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kabupaten Lumajang',
            ),
            238 => 
            array (
                'ID_KOTA' => 239,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kabupaten Madiun',
            ),
            239 => 
            array (
                'ID_KOTA' => 240,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kabupaten Magetan',
            ),
            240 => 
            array (
                'ID_KOTA' => 241,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kabupaten Malang',
            ),
            241 => 
            array (
                'ID_KOTA' => 242,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kabupaten Mojokerto',
            ),
            242 => 
            array (
                'ID_KOTA' => 243,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kabupaten Nganjuk',
            ),
            243 => 
            array (
                'ID_KOTA' => 244,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kabupaten Ngawi',
            ),
            244 => 
            array (
                'ID_KOTA' => 245,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kabupaten Pacitan',
            ),
            245 => 
            array (
                'ID_KOTA' => 246,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kabupaten Pamekasan',
            ),
            246 => 
            array (
                'ID_KOTA' => 247,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kabupaten Pasuruan',
            ),
            247 => 
            array (
                'ID_KOTA' => 248,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kabupaten Ponorogo',
            ),
            248 => 
            array (
                'ID_KOTA' => 249,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kabupaten Probolinggo',
            ),
            249 => 
            array (
                'ID_KOTA' => 250,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kabupaten Sampang',
            ),
            250 => 
            array (
                'ID_KOTA' => 251,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kabupaten Sidoarjo',
            ),
            251 => 
            array (
                'ID_KOTA' => 252,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kabupaten Situbondo',
            ),
            252 => 
            array (
                'ID_KOTA' => 253,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kabupaten Sumenep',
            ),
            253 => 
            array (
                'ID_KOTA' => 254,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kabupaten Trenggalek',
            ),
            254 => 
            array (
                'ID_KOTA' => 255,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kabupaten Tuban',
            ),
            255 => 
            array (
                'ID_KOTA' => 256,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kabupaten Tulungagung',
            ),
            256 => 
            array (
                'ID_KOTA' => 257,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kota Batu',
            ),
            257 => 
            array (
                'ID_KOTA' => 258,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kota Blitar',
            ),
            258 => 
            array (
                'ID_KOTA' => 259,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kota Kediri',
            ),
            259 => 
            array (
                'ID_KOTA' => 260,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kota Madiun',
            ),
            260 => 
            array (
                'ID_KOTA' => 261,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kota Malang',
            ),
            261 => 
            array (
                'ID_KOTA' => 262,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kota Mojokerto',
            ),
            262 => 
            array (
                'ID_KOTA' => 263,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kota Pasuruan',
            ),
            263 => 
            array (
                'ID_KOTA' => 264,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kota Probolinggo',
            ),
            264 => 
            array (
                'ID_KOTA' => 265,
                'ID_PROVINSI' => 15,
                'NAMA_KOTA' => 'Kota Surabaya',
            ),
            265 => 
            array (
                'ID_KOTA' => 266,
                'ID_PROVINSI' => 16,
                'NAMA_KOTA' => 'Kabupaten Lebak',
            ),
            266 => 
            array (
                'ID_KOTA' => 267,
                'ID_PROVINSI' => 16,
                'NAMA_KOTA' => 'Kabupaten Pandeglang',
            ),
            267 => 
            array (
                'ID_KOTA' => 268,
                'ID_PROVINSI' => 16,
                'NAMA_KOTA' => 'Kabupaten Serang',
            ),
            268 => 
            array (
                'ID_KOTA' => 269,
                'ID_PROVINSI' => 16,
                'NAMA_KOTA' => 'Kabupaten Tangerang',
            ),
            269 => 
            array (
                'ID_KOTA' => 270,
                'ID_PROVINSI' => 16,
                'NAMA_KOTA' => 'Kota Cilegon',
            ),
            270 => 
            array (
                'ID_KOTA' => 271,
                'ID_PROVINSI' => 16,
                'NAMA_KOTA' => 'Kota Serang',
            ),
            271 => 
            array (
                'ID_KOTA' => 272,
                'ID_PROVINSI' => 16,
                'NAMA_KOTA' => 'Kota Tangerang',
            ),
            272 => 
            array (
                'ID_KOTA' => 273,
                'ID_PROVINSI' => 16,
                'NAMA_KOTA' => 'Kota Tangerang Selatan',
            ),
            273 => 
            array (
                'ID_KOTA' => 274,
                'ID_PROVINSI' => 17,
                'NAMA_KOTA' => 'Kabupaten Badung',
            ),
            274 => 
            array (
                'ID_KOTA' => 275,
                'ID_PROVINSI' => 17,
                'NAMA_KOTA' => 'Kabupaten Bangli',
            ),
            275 => 
            array (
                'ID_KOTA' => 276,
                'ID_PROVINSI' => 17,
                'NAMA_KOTA' => 'Kabupaten Buleleng',
            ),
            276 => 
            array (
                'ID_KOTA' => 277,
                'ID_PROVINSI' => 17,
                'NAMA_KOTA' => 'Kabupaten Gianyar',
            ),
            277 => 
            array (
                'ID_KOTA' => 278,
                'ID_PROVINSI' => 17,
                'NAMA_KOTA' => 'Kabupaten Jembrana',
            ),
            278 => 
            array (
                'ID_KOTA' => 279,
                'ID_PROVINSI' => 17,
                'NAMA_KOTA' => 'Kabupaten Karangasem',
            ),
            279 => 
            array (
                'ID_KOTA' => 280,
                'ID_PROVINSI' => 17,
                'NAMA_KOTA' => 'Kabupaten Klungkung',
            ),
            280 => 
            array (
                'ID_KOTA' => 281,
                'ID_PROVINSI' => 17,
                'NAMA_KOTA' => 'Kabupaten Tabanan',
            ),
            281 => 
            array (
                'ID_KOTA' => 282,
                'ID_PROVINSI' => 17,
                'NAMA_KOTA' => 'Kota Denpasar',
            ),
            282 => 
            array (
                'ID_KOTA' => 283,
                'ID_PROVINSI' => 18,
                'NAMA_KOTA' => 'Kabupaten Bima',
            ),
            283 => 
            array (
                'ID_KOTA' => 284,
                'ID_PROVINSI' => 18,
                'NAMA_KOTA' => 'Kabupaten Dompu',
            ),
            284 => 
            array (
                'ID_KOTA' => 285,
                'ID_PROVINSI' => 18,
                'NAMA_KOTA' => 'Kabupaten Lombok Barat',
            ),
            285 => 
            array (
                'ID_KOTA' => 286,
                'ID_PROVINSI' => 18,
                'NAMA_KOTA' => 'Kabupaten Lombok Tengah',
            ),
            286 => 
            array (
                'ID_KOTA' => 287,
                'ID_PROVINSI' => 18,
                'NAMA_KOTA' => 'Kabupaten Lombok Timur',
            ),
            287 => 
            array (
                'ID_KOTA' => 288,
                'ID_PROVINSI' => 18,
                'NAMA_KOTA' => 'Kabupaten Lombok Utara',
            ),
            288 => 
            array (
                'ID_KOTA' => 289,
                'ID_PROVINSI' => 18,
                'NAMA_KOTA' => 'Kabupaten Sumbawa',
            ),
            289 => 
            array (
                'ID_KOTA' => 290,
                'ID_PROVINSI' => 18,
                'NAMA_KOTA' => 'Kabupaten Sumbawa Barat',
            ),
            290 => 
            array (
                'ID_KOTA' => 291,
                'ID_PROVINSI' => 18,
                'NAMA_KOTA' => 'Kota Bima',
            ),
            291 => 
            array (
                'ID_KOTA' => 292,
                'ID_PROVINSI' => 18,
                'NAMA_KOTA' => 'Kota Mataram',
            ),
            292 => 
            array (
                'ID_KOTA' => 293,
                'ID_PROVINSI' => 19,
                'NAMA_KOTA' => 'Kabupaten Alor',
            ),
            293 => 
            array (
                'ID_KOTA' => 294,
                'ID_PROVINSI' => 19,
                'NAMA_KOTA' => 'Kabupaten Belu',
            ),
            294 => 
            array (
                'ID_KOTA' => 295,
                'ID_PROVINSI' => 19,
                'NAMA_KOTA' => 'Kabupaten Ende',
            ),
            295 => 
            array (
                'ID_KOTA' => 296,
                'ID_PROVINSI' => 19,
                'NAMA_KOTA' => 'Kabupaten Flores Timur',
            ),
            296 => 
            array (
                'ID_KOTA' => 297,
                'ID_PROVINSI' => 19,
                'NAMA_KOTA' => 'Kabupaten Kupang',
            ),
            297 => 
            array (
                'ID_KOTA' => 298,
                'ID_PROVINSI' => 19,
                'NAMA_KOTA' => 'Kabupaten Lembata',
            ),
            298 => 
            array (
                'ID_KOTA' => 299,
                'ID_PROVINSI' => 19,
                'NAMA_KOTA' => 'Kabupaten Malaka',
            ),
            299 => 
            array (
                'ID_KOTA' => 300,
                'ID_PROVINSI' => 19,
                'NAMA_KOTA' => 'Kabupaten Manggarai',
            ),
            300 => 
            array (
                'ID_KOTA' => 301,
                'ID_PROVINSI' => 19,
                'NAMA_KOTA' => 'Kabupaten Manggarai Barat',
            ),
            301 => 
            array (
                'ID_KOTA' => 302,
                'ID_PROVINSI' => 19,
                'NAMA_KOTA' => 'Kabupaten Manggarai Timur',
            ),
            302 => 
            array (
                'ID_KOTA' => 303,
                'ID_PROVINSI' => 19,
                'NAMA_KOTA' => 'Kabupaten Nagekeo',
            ),
            303 => 
            array (
                'ID_KOTA' => 304,
                'ID_PROVINSI' => 19,
                'NAMA_KOTA' => 'Kabupaten Ngada',
            ),
            304 => 
            array (
                'ID_KOTA' => 305,
                'ID_PROVINSI' => 19,
                'NAMA_KOTA' => 'Kabupaten Rote Ndao',
            ),
            305 => 
            array (
                'ID_KOTA' => 306,
                'ID_PROVINSI' => 19,
                'NAMA_KOTA' => 'Kabupaten Sabu Raijua',
            ),
            306 => 
            array (
                'ID_KOTA' => 307,
                'ID_PROVINSI' => 19,
                'NAMA_KOTA' => 'Kabupaten Sikka',
            ),
            307 => 
            array (
                'ID_KOTA' => 308,
                'ID_PROVINSI' => 19,
                'NAMA_KOTA' => 'Kabupaten Sumba Barat',
            ),
            308 => 
            array (
                'ID_KOTA' => 309,
                'ID_PROVINSI' => 19,
                'NAMA_KOTA' => 'Kabupaten Sumba Barat Daya',
            ),
            309 => 
            array (
                'ID_KOTA' => 310,
                'ID_PROVINSI' => 19,
                'NAMA_KOTA' => 'Kabupaten Sumba Tengah',
            ),
            310 => 
            array (
                'ID_KOTA' => 311,
                'ID_PROVINSI' => 19,
                'NAMA_KOTA' => 'Kabupaten Sumba Timur',
            ),
            311 => 
            array (
                'ID_KOTA' => 312,
                'ID_PROVINSI' => 19,
                'NAMA_KOTA' => 'Kabupaten Timor Tengah Selatan',
            ),
            312 => 
            array (
                'ID_KOTA' => 313,
                'ID_PROVINSI' => 19,
                'NAMA_KOTA' => 'Kabupaten Timor Tengah Utara',
            ),
            313 => 
            array (
                'ID_KOTA' => 314,
                'ID_PROVINSI' => 19,
                'NAMA_KOTA' => 'Kota Kupang',
            ),
            314 => 
            array (
                'ID_KOTA' => 315,
                'ID_PROVINSI' => 20,
                'NAMA_KOTA' => 'Kabupaten Bengkayang',
            ),
            315 => 
            array (
                'ID_KOTA' => 316,
                'ID_PROVINSI' => 20,
                'NAMA_KOTA' => 'Kabupaten Kapuas Hulu',
            ),
            316 => 
            array (
                'ID_KOTA' => 317,
                'ID_PROVINSI' => 20,
                'NAMA_KOTA' => 'Kabupaten Kayong Utara',
            ),
            317 => 
            array (
                'ID_KOTA' => 318,
                'ID_PROVINSI' => 20,
                'NAMA_KOTA' => 'Kabupaten Ketapang',
            ),
            318 => 
            array (
                'ID_KOTA' => 319,
                'ID_PROVINSI' => 20,
                'NAMA_KOTA' => 'Kabupaten Kubu Raya',
            ),
            319 => 
            array (
                'ID_KOTA' => 320,
                'ID_PROVINSI' => 20,
                'NAMA_KOTA' => 'Kabupaten Landak',
            ),
            320 => 
            array (
                'ID_KOTA' => 321,
                'ID_PROVINSI' => 20,
                'NAMA_KOTA' => 'Kabupaten Melawi',
            ),
            321 => 
            array (
                'ID_KOTA' => 322,
                'ID_PROVINSI' => 20,
                'NAMA_KOTA' => 'Kabupaten Mempawah',
            ),
            322 => 
            array (
                'ID_KOTA' => 323,
                'ID_PROVINSI' => 20,
                'NAMA_KOTA' => 'Kabupaten Sambas',
            ),
            323 => 
            array (
                'ID_KOTA' => 324,
                'ID_PROVINSI' => 20,
                'NAMA_KOTA' => 'Kabupaten Sanggau',
            ),
            324 => 
            array (
                'ID_KOTA' => 325,
                'ID_PROVINSI' => 20,
                'NAMA_KOTA' => 'Kabupaten Sekadau',
            ),
            325 => 
            array (
                'ID_KOTA' => 326,
                'ID_PROVINSI' => 20,
                'NAMA_KOTA' => 'Kabupaten Sintang',
            ),
            326 => 
            array (
                'ID_KOTA' => 327,
                'ID_PROVINSI' => 20,
                'NAMA_KOTA' => 'Kota Pontianak',
            ),
            327 => 
            array (
                'ID_KOTA' => 328,
                'ID_PROVINSI' => 20,
                'NAMA_KOTA' => 'Kota Singkawang',
            ),
            328 => 
            array (
                'ID_KOTA' => 329,
                'ID_PROVINSI' => 21,
                'NAMA_KOTA' => 'Kabupaten Barito Selatan',
            ),
            329 => 
            array (
                'ID_KOTA' => 330,
                'ID_PROVINSI' => 21,
                'NAMA_KOTA' => 'Kabupaten Barito Timur',
            ),
            330 => 
            array (
                'ID_KOTA' => 331,
                'ID_PROVINSI' => 21,
                'NAMA_KOTA' => 'Kabupaten Barito Utara',
            ),
            331 => 
            array (
                'ID_KOTA' => 332,
                'ID_PROVINSI' => 21,
                'NAMA_KOTA' => 'Kabupaten Gunung Mas',
            ),
            332 => 
            array (
                'ID_KOTA' => 333,
                'ID_PROVINSI' => 21,
                'NAMA_KOTA' => 'Kabupaten Kapuas',
            ),
            333 => 
            array (
                'ID_KOTA' => 334,
                'ID_PROVINSI' => 21,
                'NAMA_KOTA' => 'Kabupaten Katingan',
            ),
            334 => 
            array (
                'ID_KOTA' => 335,
                'ID_PROVINSI' => 21,
                'NAMA_KOTA' => 'Kabupaten Kotawaringin Barat',
            ),
            335 => 
            array (
                'ID_KOTA' => 336,
                'ID_PROVINSI' => 21,
                'NAMA_KOTA' => 'Kabupaten Kotawaringin Timur',
            ),
            336 => 
            array (
                'ID_KOTA' => 337,
                'ID_PROVINSI' => 21,
                'NAMA_KOTA' => 'Kabupaten Lamandau',
            ),
            337 => 
            array (
                'ID_KOTA' => 338,
                'ID_PROVINSI' => 21,
                'NAMA_KOTA' => 'Kabupaten Murung Raya',
            ),
            338 => 
            array (
                'ID_KOTA' => 339,
                'ID_PROVINSI' => 21,
                'NAMA_KOTA' => 'Kabupaten Pulang Pisau',
            ),
            339 => 
            array (
                'ID_KOTA' => 340,
                'ID_PROVINSI' => 21,
                'NAMA_KOTA' => 'Kabupaten Seruyan',
            ),
            340 => 
            array (
                'ID_KOTA' => 341,
                'ID_PROVINSI' => 21,
                'NAMA_KOTA' => 'Kabupaten Sukamara',
            ),
            341 => 
            array (
                'ID_KOTA' => 342,
                'ID_PROVINSI' => 21,
                'NAMA_KOTA' => 'Kota Palangka Raya',
            ),
            342 => 
            array (
                'ID_KOTA' => 343,
                'ID_PROVINSI' => 22,
                'NAMA_KOTA' => 'Kabupaten Balangan',
            ),
            343 => 
            array (
                'ID_KOTA' => 344,
                'ID_PROVINSI' => 22,
                'NAMA_KOTA' => 'Kabupaten Banjar',
            ),
            344 => 
            array (
                'ID_KOTA' => 345,
                'ID_PROVINSI' => 22,
                'NAMA_KOTA' => 'Kabupaten Barito Kuala',
            ),
            345 => 
            array (
                'ID_KOTA' => 346,
                'ID_PROVINSI' => 22,
                'NAMA_KOTA' => 'Kabupaten Hulu Sungai Selatan',
            ),
            346 => 
            array (
                'ID_KOTA' => 347,
                'ID_PROVINSI' => 22,
                'NAMA_KOTA' => 'Kabupaten Hulu Sungai Tengah',
            ),
            347 => 
            array (
                'ID_KOTA' => 348,
                'ID_PROVINSI' => 22,
                'NAMA_KOTA' => 'Kabupaten Hulu Sungai Utara',
            ),
            348 => 
            array (
                'ID_KOTA' => 349,
                'ID_PROVINSI' => 22,
                'NAMA_KOTA' => 'Kabupaten Kotabaru',
            ),
            349 => 
            array (
                'ID_KOTA' => 350,
                'ID_PROVINSI' => 22,
                'NAMA_KOTA' => 'Kabupaten Tabalong',
            ),
            350 => 
            array (
                'ID_KOTA' => 351,
                'ID_PROVINSI' => 22,
                'NAMA_KOTA' => 'Kabupaten Tanah Bumbu',
            ),
            351 => 
            array (
                'ID_KOTA' => 352,
                'ID_PROVINSI' => 22,
                'NAMA_KOTA' => 'Kabupaten Tanah Laut',
            ),
            352 => 
            array (
                'ID_KOTA' => 353,
                'ID_PROVINSI' => 22,
                'NAMA_KOTA' => 'Kabupaten Tapin',
            ),
            353 => 
            array (
                'ID_KOTA' => 354,
                'ID_PROVINSI' => 22,
                'NAMA_KOTA' => 'Kota Banjarbaru',
            ),
            354 => 
            array (
                'ID_KOTA' => 355,
                'ID_PROVINSI' => 22,
                'NAMA_KOTA' => 'Kota Banjarmasin',
            ),
            355 => 
            array (
                'ID_KOTA' => 356,
                'ID_PROVINSI' => 23,
                'NAMA_KOTA' => 'Kabupaten Berau',
            ),
            356 => 
            array (
                'ID_KOTA' => 357,
                'ID_PROVINSI' => 23,
                'NAMA_KOTA' => 'Kabupaten Kutai Barat',
            ),
            357 => 
            array (
                'ID_KOTA' => 358,
                'ID_PROVINSI' => 23,
                'NAMA_KOTA' => 'Kabupaten Kutai Kartanegara',
            ),
            358 => 
            array (
                'ID_KOTA' => 359,
                'ID_PROVINSI' => 23,
                'NAMA_KOTA' => 'Kabupaten Kutai Timur',
            ),
            359 => 
            array (
                'ID_KOTA' => 360,
                'ID_PROVINSI' => 23,
                'NAMA_KOTA' => 'Kabupaten Mahakam Ulu',
            ),
            360 => 
            array (
                'ID_KOTA' => 361,
                'ID_PROVINSI' => 23,
                'NAMA_KOTA' => 'Kabupaten Paser',
            ),
            361 => 
            array (
                'ID_KOTA' => 362,
                'ID_PROVINSI' => 23,
                'NAMA_KOTA' => 'Kabupaten Penajam Paser Utara',
            ),
            362 => 
            array (
                'ID_KOTA' => 363,
                'ID_PROVINSI' => 23,
                'NAMA_KOTA' => 'Kota Balikpapan',
            ),
            363 => 
            array (
                'ID_KOTA' => 364,
                'ID_PROVINSI' => 23,
                'NAMA_KOTA' => 'Kota Bontang',
            ),
            364 => 
            array (
                'ID_KOTA' => 365,
                'ID_PROVINSI' => 23,
                'NAMA_KOTA' => 'Kota Samarinda',
            ),
            365 => 
            array (
                'ID_KOTA' => 366,
                'ID_PROVINSI' => 24,
            'NAMA_KOTA' => 'Kabupaten Bulungan (Bulongan)',
            ),
            366 => 
            array (
                'ID_KOTA' => 367,
                'ID_PROVINSI' => 24,
                'NAMA_KOTA' => 'Kabupaten Malinau',
            ),
            367 => 
            array (
                'ID_KOTA' => 368,
                'ID_PROVINSI' => 24,
                'NAMA_KOTA' => 'Kabupaten Nunukan',
            ),
            368 => 
            array (
                'ID_KOTA' => 369,
                'ID_PROVINSI' => 24,
                'NAMA_KOTA' => 'Kabupaten Tana Tidung',
            ),
            369 => 
            array (
                'ID_KOTA' => 370,
                'ID_PROVINSI' => 24,
                'NAMA_KOTA' => 'Kota Tarakan',
            ),
            370 => 
            array (
                'ID_KOTA' => 371,
                'ID_PROVINSI' => 25,
                'NAMA_KOTA' => 'Kabupaten Bolaang Mongondow',
            ),
            371 => 
            array (
                'ID_KOTA' => 372,
                'ID_PROVINSI' => 25,
                'NAMA_KOTA' => 'Kabupaten Bolaang Mongondow Selatan',
            ),
            372 => 
            array (
                'ID_KOTA' => 373,
                'ID_PROVINSI' => 25,
                'NAMA_KOTA' => 'Kabupaten Bolaang Mongondow Timur',
            ),
            373 => 
            array (
                'ID_KOTA' => 374,
                'ID_PROVINSI' => 25,
                'NAMA_KOTA' => 'Kabupaten Bolaang Mongondow Utara',
            ),
            374 => 
            array (
                'ID_KOTA' => 375,
                'ID_PROVINSI' => 25,
                'NAMA_KOTA' => 'Kabupaten Kepulauan Sangihe',
            ),
            375 => 
            array (
                'ID_KOTA' => 376,
                'ID_PROVINSI' => 25,
                'NAMA_KOTA' => 'Kabupaten Kepulauan Siau Tagulandang Biaro (Sitaro',
                ),
                376 => 
                array (
                    'ID_KOTA' => 377,
                    'ID_PROVINSI' => 25,
                    'NAMA_KOTA' => 'Kabupaten Kepulauan Talaud',
                ),
                377 => 
                array (
                    'ID_KOTA' => 378,
                    'ID_PROVINSI' => 25,
                    'NAMA_KOTA' => 'Kabupaten Minahasa',
                ),
                378 => 
                array (
                    'ID_KOTA' => 379,
                    'ID_PROVINSI' => 25,
                    'NAMA_KOTA' => 'Kabupaten Minahasa Selatan',
                ),
                379 => 
                array (
                    'ID_KOTA' => 380,
                    'ID_PROVINSI' => 25,
                    'NAMA_KOTA' => 'Kabupaten Minahasa Tenggara',
                ),
                380 => 
                array (
                    'ID_KOTA' => 381,
                    'ID_PROVINSI' => 25,
                    'NAMA_KOTA' => 'Kabupaten Minahasa Utara',
                ),
                381 => 
                array (
                    'ID_KOTA' => 382,
                    'ID_PROVINSI' => 25,
                    'NAMA_KOTA' => 'Kota Bitung',
                ),
                382 => 
                array (
                    'ID_KOTA' => 383,
                    'ID_PROVINSI' => 25,
                    'NAMA_KOTA' => 'Kota Kotamobagu',
                ),
                383 => 
                array (
                    'ID_KOTA' => 384,
                    'ID_PROVINSI' => 25,
                    'NAMA_KOTA' => 'Kota Manado',
                ),
                384 => 
                array (
                    'ID_KOTA' => 385,
                    'ID_PROVINSI' => 25,
                    'NAMA_KOTA' => 'Kota Tomohon',
                ),
                385 => 
                array (
                    'ID_KOTA' => 386,
                    'ID_PROVINSI' => 26,
                    'NAMA_KOTA' => 'Kabupaten Banggai',
                ),
                386 => 
                array (
                    'ID_KOTA' => 387,
                    'ID_PROVINSI' => 26,
                    'NAMA_KOTA' => 'Kabupaten Banggai Kepulauan',
                ),
                387 => 
                array (
                    'ID_KOTA' => 388,
                    'ID_PROVINSI' => 26,
                    'NAMA_KOTA' => 'Kabupaten Banggai Laut',
                ),
                388 => 
                array (
                    'ID_KOTA' => 389,
                    'ID_PROVINSI' => 26,
                    'NAMA_KOTA' => 'Kabupaten Buol',
                ),
                389 => 
                array (
                    'ID_KOTA' => 390,
                    'ID_PROVINSI' => 26,
                    'NAMA_KOTA' => 'Kabupaten Donggala',
                ),
                390 => 
                array (
                    'ID_KOTA' => 391,
                    'ID_PROVINSI' => 26,
                    'NAMA_KOTA' => 'Kabupaten Morowali',
                ),
                391 => 
                array (
                    'ID_KOTA' => 392,
                    'ID_PROVINSI' => 26,
                    'NAMA_KOTA' => 'Kabupaten Morowali Utara',
                ),
                392 => 
                array (
                    'ID_KOTA' => 393,
                    'ID_PROVINSI' => 26,
                    'NAMA_KOTA' => 'Kabupaten Parigi Moutong',
                ),
                393 => 
                array (
                    'ID_KOTA' => 394,
                    'ID_PROVINSI' => 26,
                    'NAMA_KOTA' => 'Kabupaten Poso',
                ),
                394 => 
                array (
                    'ID_KOTA' => 395,
                    'ID_PROVINSI' => 26,
                    'NAMA_KOTA' => 'Kabupaten Sigi',
                ),
                395 => 
                array (
                    'ID_KOTA' => 396,
                    'ID_PROVINSI' => 26,
                    'NAMA_KOTA' => 'Kabupaten Tojo Una-Una',
                ),
                396 => 
                array (
                    'ID_KOTA' => 397,
                    'ID_PROVINSI' => 26,
                    'NAMA_KOTA' => 'Kabupaten Toli-Toli',
                ),
                397 => 
                array (
                    'ID_KOTA' => 398,
                    'ID_PROVINSI' => 26,
                    'NAMA_KOTA' => 'Kota Palu',
                ),
                398 => 
                array (
                    'ID_KOTA' => 399,
                    'ID_PROVINSI' => 27,
                    'NAMA_KOTA' => 'Kabupaten Bantaeng',
                ),
                399 => 
                array (
                    'ID_KOTA' => 400,
                    'ID_PROVINSI' => 27,
                    'NAMA_KOTA' => 'Kabupaten Barru',
                ),
                400 => 
                array (
                    'ID_KOTA' => 401,
                    'ID_PROVINSI' => 27,
                    'NAMA_KOTA' => 'Kabupaten Bone',
                ),
                401 => 
                array (
                    'ID_KOTA' => 402,
                    'ID_PROVINSI' => 27,
                    'NAMA_KOTA' => 'Kabupaten Bulukumba',
                ),
                402 => 
                array (
                    'ID_KOTA' => 403,
                    'ID_PROVINSI' => 27,
                    'NAMA_KOTA' => 'Kabupaten Enrekang',
                ),
                403 => 
                array (
                    'ID_KOTA' => 404,
                    'ID_PROVINSI' => 27,
                    'NAMA_KOTA' => 'Kabupaten Gowa',
                ),
                404 => 
                array (
                    'ID_KOTA' => 405,
                    'ID_PROVINSI' => 27,
                    'NAMA_KOTA' => 'Kabupaten Jeneponto',
                ),
                405 => 
                array (
                    'ID_KOTA' => 406,
                    'ID_PROVINSI' => 27,
                'NAMA_KOTA' => 'Kabupaten Selayar (Kepulauan Selayar)',
                ),
                406 => 
                array (
                    'ID_KOTA' => 407,
                    'ID_PROVINSI' => 27,
                    'NAMA_KOTA' => 'Kabupaten Luwu',
                ),
                407 => 
                array (
                    'ID_KOTA' => 408,
                    'ID_PROVINSI' => 27,
                    'NAMA_KOTA' => 'Kabupaten Luwu Timur',
                ),
                408 => 
                array (
                    'ID_KOTA' => 409,
                    'ID_PROVINSI' => 27,
                    'NAMA_KOTA' => 'Kabupaten Luwu Utara',
                ),
                409 => 
                array (
                    'ID_KOTA' => 410,
                    'ID_PROVINSI' => 27,
                    'NAMA_KOTA' => 'Kabupaten Maros',
                ),
                410 => 
                array (
                    'ID_KOTA' => 411,
                    'ID_PROVINSI' => 27,
                    'NAMA_KOTA' => 'Kabupaten Pangkajene Kepulauan',
                ),
                411 => 
                array (
                    'ID_KOTA' => 412,
                    'ID_PROVINSI' => 27,
                    'NAMA_KOTA' => 'Kabupaten Pinrang',
                ),
                412 => 
                array (
                    'ID_KOTA' => 413,
                    'ID_PROVINSI' => 27,
                'NAMA_KOTA' => 'Kabupaten Sidenreng Rappang (Sidrap)',
                ),
                413 => 
                array (
                    'ID_KOTA' => 414,
                    'ID_PROVINSI' => 27,
                    'NAMA_KOTA' => 'Kabupaten Sinjai',
                ),
                414 => 
                array (
                    'ID_KOTA' => 415,
                    'ID_PROVINSI' => 27,
                    'NAMA_KOTA' => 'Kabupaten Soppeng',
                ),
                415 => 
                array (
                    'ID_KOTA' => 416,
                    'ID_PROVINSI' => 27,
                    'NAMA_KOTA' => 'Kabupaten Takalar',
                ),
                416 => 
                array (
                    'ID_KOTA' => 417,
                    'ID_PROVINSI' => 27,
                    'NAMA_KOTA' => 'Kabupaten Tana Toraja',
                ),
                417 => 
                array (
                    'ID_KOTA' => 418,
                    'ID_PROVINSI' => 27,
                    'NAMA_KOTA' => 'Kabupaten Toraja Utara',
                ),
                418 => 
                array (
                    'ID_KOTA' => 419,
                    'ID_PROVINSI' => 27,
                    'NAMA_KOTA' => 'Kabupaten Wajo',
                ),
                419 => 
                array (
                    'ID_KOTA' => 420,
                    'ID_PROVINSI' => 27,
                    'NAMA_KOTA' => 'Kota Makassar',
                ),
                420 => 
                array (
                    'ID_KOTA' => 421,
                    'ID_PROVINSI' => 27,
                    'NAMA_KOTA' => 'Kota Palopo',
                ),
                421 => 
                array (
                    'ID_KOTA' => 422,
                    'ID_PROVINSI' => 27,
                    'NAMA_KOTA' => 'Kota Parepare',
                ),
                422 => 
                array (
                    'ID_KOTA' => 423,
                    'ID_PROVINSI' => 28,
                    'NAMA_KOTA' => 'Kabupaten Bombana',
                ),
                423 => 
                array (
                    'ID_KOTA' => 424,
                    'ID_PROVINSI' => 28,
                    'NAMA_KOTA' => 'Kabupaten Buton',
                ),
                424 => 
                array (
                    'ID_KOTA' => 425,
                    'ID_PROVINSI' => 28,
                    'NAMA_KOTA' => 'Kabupaten Buton Selatan',
                ),
                425 => 
                array (
                    'ID_KOTA' => 426,
                    'ID_PROVINSI' => 28,
                    'NAMA_KOTA' => 'Kabupaten Buton Tengah',
                ),
                426 => 
                array (
                    'ID_KOTA' => 427,
                    'ID_PROVINSI' => 28,
                    'NAMA_KOTA' => 'Kabupaten Buton Utara',
                ),
                427 => 
                array (
                    'ID_KOTA' => 428,
                    'ID_PROVINSI' => 28,
                    'NAMA_KOTA' => 'Kabupaten Kolaka',
                ),
                428 => 
                array (
                    'ID_KOTA' => 429,
                    'ID_PROVINSI' => 28,
                    'NAMA_KOTA' => 'Kabupaten Kolaka Timur',
                ),
                429 => 
                array (
                    'ID_KOTA' => 430,
                    'ID_PROVINSI' => 28,
                    'NAMA_KOTA' => 'Kabupaten Kolaka Utara',
                ),
                430 => 
                array (
                    'ID_KOTA' => 431,
                    'ID_PROVINSI' => 28,
                    'NAMA_KOTA' => 'Kabupaten Konawe',
                ),
                431 => 
                array (
                    'ID_KOTA' => 432,
                    'ID_PROVINSI' => 28,
                    'NAMA_KOTA' => 'Kabupaten Konawe Kepulauan',
                ),
                432 => 
                array (
                    'ID_KOTA' => 433,
                    'ID_PROVINSI' => 28,
                    'NAMA_KOTA' => 'Kabupaten Konawe Selatan',
                ),
                433 => 
                array (
                    'ID_KOTA' => 434,
                    'ID_PROVINSI' => 28,
                    'NAMA_KOTA' => 'Kabupaten Konawe Utara',
                ),
                434 => 
                array (
                    'ID_KOTA' => 435,
                    'ID_PROVINSI' => 28,
                    'NAMA_KOTA' => 'Kabupaten Muna',
                ),
                435 => 
                array (
                    'ID_KOTA' => 436,
                    'ID_PROVINSI' => 28,
                    'NAMA_KOTA' => 'Kabupaten Muna Barat',
                ),
                436 => 
                array (
                    'ID_KOTA' => 437,
                    'ID_PROVINSI' => 28,
                    'NAMA_KOTA' => 'Kabupaten Wakatobi',
                ),
                437 => 
                array (
                    'ID_KOTA' => 438,
                    'ID_PROVINSI' => 28,
                    'NAMA_KOTA' => 'Kota Baubau',
                ),
                438 => 
                array (
                    'ID_KOTA' => 439,
                    'ID_PROVINSI' => 28,
                    'NAMA_KOTA' => 'Kota Kendari',
                ),
                439 => 
                array (
                    'ID_KOTA' => 440,
                    'ID_PROVINSI' => 29,
                    'NAMA_KOTA' => 'Kabupaten Boalemo',
                ),
                440 => 
                array (
                    'ID_KOTA' => 441,
                    'ID_PROVINSI' => 29,
                    'NAMA_KOTA' => 'Kabupaten Bone Bolango',
                ),
                441 => 
                array (
                    'ID_KOTA' => 442,
                    'ID_PROVINSI' => 29,
                    'NAMA_KOTA' => 'Kabupaten Gorontalo',
                ),
                442 => 
                array (
                    'ID_KOTA' => 443,
                    'ID_PROVINSI' => 29,
                    'NAMA_KOTA' => 'Kabupaten Gorontalo Utara',
                ),
                443 => 
                array (
                    'ID_KOTA' => 444,
                    'ID_PROVINSI' => 29,
                    'NAMA_KOTA' => 'Kabupaten Pohuwato',
                ),
                444 => 
                array (
                    'ID_KOTA' => 445,
                    'ID_PROVINSI' => 29,
                    'NAMA_KOTA' => 'Kota Gorontalo',
                ),
                445 => 
                array (
                    'ID_KOTA' => 446,
                    'ID_PROVINSI' => 30,
                    'NAMA_KOTA' => 'Kabupaten Majene',
                ),
                446 => 
                array (
                    'ID_KOTA' => 447,
                    'ID_PROVINSI' => 30,
                    'NAMA_KOTA' => 'Kabupaten Mamasa',
                ),
                447 => 
                array (
                    'ID_KOTA' => 448,
                    'ID_PROVINSI' => 30,
                    'NAMA_KOTA' => 'Kabupaten Mamuju',
                ),
                448 => 
                array (
                    'ID_KOTA' => 449,
                    'ID_PROVINSI' => 30,
                    'NAMA_KOTA' => 'Kabupaten Mamuju Tengah',
                ),
                449 => 
                array (
                    'ID_KOTA' => 450,
                    'ID_PROVINSI' => 30,
                    'NAMA_KOTA' => 'Kabupaten Mamuju Utara',
                ),
                450 => 
                array (
                    'ID_KOTA' => 451,
                    'ID_PROVINSI' => 30,
                    'NAMA_KOTA' => 'Kabupaten Polewali Mandar',
                ),
                451 => 
                array (
                    'ID_KOTA' => 452,
                    'ID_PROVINSI' => 31,
                    'NAMA_KOTA' => 'Kabupaten Buru',
                ),
                452 => 
                array (
                    'ID_KOTA' => 453,
                    'ID_PROVINSI' => 31,
                    'NAMA_KOTA' => 'Kabupaten Buru Selatan',
                ),
                453 => 
                array (
                    'ID_KOTA' => 454,
                    'ID_PROVINSI' => 31,
                    'NAMA_KOTA' => 'Kabupaten Kepulauan Aru',
                ),
                454 => 
                array (
                    'ID_KOTA' => 455,
                    'ID_PROVINSI' => 31,
                    'NAMA_KOTA' => 'Kabupaten Maluku Barat Daya',
                ),
                455 => 
                array (
                    'ID_KOTA' => 456,
                    'ID_PROVINSI' => 31,
                    'NAMA_KOTA' => 'Kabupaten Maluku Tengah',
                ),
                456 => 
                array (
                    'ID_KOTA' => 457,
                    'ID_PROVINSI' => 31,
                    'NAMA_KOTA' => 'Kabupaten Maluku Tenggara',
                ),
                457 => 
                array (
                    'ID_KOTA' => 458,
                    'ID_PROVINSI' => 31,
                    'NAMA_KOTA' => 'Kabupaten Maluku Tenggara Barat',
                ),
                458 => 
                array (
                    'ID_KOTA' => 459,
                    'ID_PROVINSI' => 31,
                    'NAMA_KOTA' => 'Kabupaten Seram Bagian Barat',
                ),
                459 => 
                array (
                    'ID_KOTA' => 460,
                    'ID_PROVINSI' => 31,
                    'NAMA_KOTA' => 'Kabupaten Seram Bagian Timur',
                ),
                460 => 
                array (
                    'ID_KOTA' => 461,
                    'ID_PROVINSI' => 31,
                    'NAMA_KOTA' => 'Kota Ambon',
                ),
                461 => 
                array (
                    'ID_KOTA' => 462,
                    'ID_PROVINSI' => 31,
                    'NAMA_KOTA' => 'Kota Tual',
                ),
                462 => 
                array (
                    'ID_KOTA' => 463,
                    'ID_PROVINSI' => 32,
                    'NAMA_KOTA' => 'Kabupaten Halmahera Barat',
                ),
                463 => 
                array (
                    'ID_KOTA' => 464,
                    'ID_PROVINSI' => 32,
                    'NAMA_KOTA' => 'Kabupaten Halmahera Selatan',
                ),
                464 => 
                array (
                    'ID_KOTA' => 465,
                    'ID_PROVINSI' => 32,
                    'NAMA_KOTA' => 'Kabupaten Halmahera Tengah',
                ),
                465 => 
                array (
                    'ID_KOTA' => 466,
                    'ID_PROVINSI' => 32,
                    'NAMA_KOTA' => 'Kabupaten Halmahera Timur',
                ),
                466 => 
                array (
                    'ID_KOTA' => 467,
                    'ID_PROVINSI' => 32,
                    'NAMA_KOTA' => 'Kabupaten Halmahera Utara',
                ),
                467 => 
                array (
                    'ID_KOTA' => 468,
                    'ID_PROVINSI' => 32,
                    'NAMA_KOTA' => 'Kabupaten Kepulauan Sula',
                ),
                468 => 
                array (
                    'ID_KOTA' => 469,
                    'ID_PROVINSI' => 32,
                    'NAMA_KOTA' => 'Kabupaten Pulau Morotai',
                ),
                469 => 
                array (
                    'ID_KOTA' => 470,
                    'ID_PROVINSI' => 32,
                    'NAMA_KOTA' => 'Kabupaten Pulau Taliabu',
                ),
                470 => 
                array (
                    'ID_KOTA' => 471,
                    'ID_PROVINSI' => 32,
                    'NAMA_KOTA' => 'Kota Ternate',
                ),
                471 => 
                array (
                    'ID_KOTA' => 472,
                    'ID_PROVINSI' => 32,
                    'NAMA_KOTA' => 'Kota Tidore Kepulauan',
                ),
                472 => 
                array (
                    'ID_KOTA' => 473,
                    'ID_PROVINSI' => 33,
                    'NAMA_KOTA' => 'Kabupaten Asmat',
                ),
                473 => 
                array (
                    'ID_KOTA' => 474,
                    'ID_PROVINSI' => 33,
                    'NAMA_KOTA' => 'Kabupaten Biak Numfor',
                ),
                474 => 
                array (
                    'ID_KOTA' => 475,
                    'ID_PROVINSI' => 33,
                    'NAMA_KOTA' => 'Kabupaten Boven Digoel',
                ),
                475 => 
                array (
                    'ID_KOTA' => 476,
                    'ID_PROVINSI' => 33,
                'NAMA_KOTA' => 'Kabupaten Deiyai (Deliyai)',
                ),
                476 => 
                array (
                    'ID_KOTA' => 477,
                    'ID_PROVINSI' => 33,
                    'NAMA_KOTA' => 'Kabupaten Dogiyai',
                ),
                477 => 
                array (
                    'ID_KOTA' => 478,
                    'ID_PROVINSI' => 33,
                    'NAMA_KOTA' => 'Kabupaten Intan Jaya',
                ),
                478 => 
                array (
                    'ID_KOTA' => 479,
                    'ID_PROVINSI' => 33,
                    'NAMA_KOTA' => 'Kabupaten Jayapura',
                ),
                479 => 
                array (
                    'ID_KOTA' => 480,
                    'ID_PROVINSI' => 33,
                    'NAMA_KOTA' => 'Kabupaten Jayawijaya',
                ),
                480 => 
                array (
                    'ID_KOTA' => 481,
                    'ID_PROVINSI' => 33,
                    'NAMA_KOTA' => 'Kabupaten Keerom',
                ),
                481 => 
                array (
                    'ID_KOTA' => 482,
                    'ID_PROVINSI' => 33,
                'NAMA_KOTA' => 'Kabupaten Kepulauan Yapen (Yapen Waropen)',
                ),
                482 => 
                array (
                    'ID_KOTA' => 483,
                    'ID_PROVINSI' => 33,
                    'NAMA_KOTA' => 'Kabupaten Lanny Jaya',
                ),
                483 => 
                array (
                    'ID_KOTA' => 484,
                    'ID_PROVINSI' => 33,
                    'NAMA_KOTA' => 'Kabupaten Mamberamo Raya',
                ),
                484 => 
                array (
                    'ID_KOTA' => 485,
                    'ID_PROVINSI' => 33,
                    'NAMA_KOTA' => 'Kabupaten Mamberamo Tengah',
                ),
                485 => 
                array (
                    'ID_KOTA' => 486,
                    'ID_PROVINSI' => 33,
                    'NAMA_KOTA' => 'Kabupaten Mappi',
                ),
                486 => 
                array (
                    'ID_KOTA' => 487,
                    'ID_PROVINSI' => 33,
                    'NAMA_KOTA' => 'Kabupaten Merauke',
                ),
                487 => 
                array (
                    'ID_KOTA' => 488,
                    'ID_PROVINSI' => 33,
                    'NAMA_KOTA' => 'Kabupaten Mimika',
                ),
                488 => 
                array (
                    'ID_KOTA' => 489,
                    'ID_PROVINSI' => 33,
                    'NAMA_KOTA' => 'Kabupaten Nabire',
                ),
                489 => 
                array (
                    'ID_KOTA' => 490,
                    'ID_PROVINSI' => 33,
                    'NAMA_KOTA' => 'Kabupaten Nduga',
                ),
                490 => 
                array (
                    'ID_KOTA' => 491,
                    'ID_PROVINSI' => 33,
                    'NAMA_KOTA' => 'Kabupaten Paniai',
                ),
                491 => 
                array (
                    'ID_KOTA' => 492,
                    'ID_PROVINSI' => 33,
                    'NAMA_KOTA' => 'Kabupaten Pegunungan Bintang',
                ),
                492 => 
                array (
                    'ID_KOTA' => 493,
                    'ID_PROVINSI' => 33,
                    'NAMA_KOTA' => 'Kabupaten Puncak',
                ),
                493 => 
                array (
                    'ID_KOTA' => 494,
                    'ID_PROVINSI' => 33,
                    'NAMA_KOTA' => 'Kabupaten Puncak Jaya',
                ),
                494 => 
                array (
                    'ID_KOTA' => 495,
                    'ID_PROVINSI' => 33,
                    'NAMA_KOTA' => 'Kabupaten Sarmi',
                ),
                495 => 
                array (
                    'ID_KOTA' => 496,
                    'ID_PROVINSI' => 33,
                    'NAMA_KOTA' => 'Kabupaten Supiori',
                ),
                496 => 
                array (
                    'ID_KOTA' => 497,
                    'ID_PROVINSI' => 33,
                    'NAMA_KOTA' => 'Kabupaten Tolikara',
                ),
                497 => 
                array (
                    'ID_KOTA' => 498,
                    'ID_PROVINSI' => 33,
                    'NAMA_KOTA' => 'Kabupaten Waropen',
                ),
                498 => 
                array (
                    'ID_KOTA' => 499,
                    'ID_PROVINSI' => 33,
                    'NAMA_KOTA' => 'Kabupaten Yahukimo',
                ),
                499 => 
                array (
                    'ID_KOTA' => 500,
                    'ID_PROVINSI' => 33,
                    'NAMA_KOTA' => 'Kabupaten Yalimo',
                ),
            ));
        \DB::table('kota')->insert(array (
            0 => 
            array (
                'ID_KOTA' => 501,
                'ID_PROVINSI' => 33,
                'NAMA_KOTA' => 'Kota Jayapura',
            ),
            1 => 
            array (
                'ID_KOTA' => 502,
                'ID_PROVINSI' => 34,
                'NAMA_KOTA' => 'Kabupaten Fakfak',
            ),
            2 => 
            array (
                'ID_KOTA' => 503,
                'ID_PROVINSI' => 34,
                'NAMA_KOTA' => 'Kabupaten Kaimana',
            ),
            3 => 
            array (
                'ID_KOTA' => 504,
                'ID_PROVINSI' => 34,
                'NAMA_KOTA' => 'Kabupaten Manokwari',
            ),
            4 => 
            array (
                'ID_KOTA' => 505,
                'ID_PROVINSI' => 34,
                'NAMA_KOTA' => 'Kabupaten Manokwari Selatan',
            ),
            5 => 
            array (
                'ID_KOTA' => 506,
                'ID_PROVINSI' => 34,
                'NAMA_KOTA' => 'Kabupaten Maybrat',
            ),
            6 => 
            array (
                'ID_KOTA' => 507,
                'ID_PROVINSI' => 34,
                'NAMA_KOTA' => 'Kabupaten Pegunungan Arfak',
            ),
            7 => 
            array (
                'ID_KOTA' => 508,
                'ID_PROVINSI' => 34,
                'NAMA_KOTA' => 'Kabupaten Raja Ampat',
            ),
            8 => 
            array (
                'ID_KOTA' => 509,
                'ID_PROVINSI' => 34,
                'NAMA_KOTA' => 'Kabupaten Sorong',
            ),
            9 => 
            array (
                'ID_KOTA' => 510,
                'ID_PROVINSI' => 34,
                'NAMA_KOTA' => 'Kabupaten Sorong Selatan',
            ),
            10 => 
            array (
                'ID_KOTA' => 511,
                'ID_PROVINSI' => 34,
                'NAMA_KOTA' => 'Kabupaten Tambrauw',
            ),
            11 => 
            array (
                'ID_KOTA' => 512,
                'ID_PROVINSI' => 34,
                'NAMA_KOTA' => 'Kabupaten Teluk Bintuni',
            ),
            12 => 
            array (
                'ID_KOTA' => 513,
                'ID_PROVINSI' => 34,
                'NAMA_KOTA' => 'Kabupaten Teluk Wondama',
            ),
            13 => 
            array (
                'ID_KOTA' => 514,
                'ID_PROVINSI' => 34,
                'NAMA_KOTA' => 'Kota Sorong',
            ),
        ));
    }
}
