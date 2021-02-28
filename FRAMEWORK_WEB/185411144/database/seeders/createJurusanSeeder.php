<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class createJurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jurusan = [
            [
                'nama_jurusan' => 'Komputer Akuntansi',
                'jumlah_sks'   => '12',
                'jenjang'      => 'D3',
            ],
            [
                'nama_jurusan' => 'Teknik Komputer',
                'jumlah_sks'   => '34',
                'jenjang'      => 'D3',
            ],
            [
                'nama_jurusan' => 'Manajemen Informatika',
                'jumlah_sks'   => '40',
                'jenjang'      => 'D3',
            ],
            [
                'nama_jurusan' => 'Sistem Informasi',
                'jumlah_sks'   => '40',
                'jenjang'      => 'S1',
            ],
            [
                'nama_jurusan' => 'Teknik Informatika',
                'jumlah_sks'   => '45',
                'jenjang'      => 'S1',
            ]
        ];

        DB::table('jurusan')->insert($jurusan);
    }
}
