<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class createPropinsiDanKotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $propinsi = [
            ['nama_propinsi' => 'DIY'],
            ['nama_propinsi' => 'Jawa Tengah'],
            ['nama_propinsi' => 'Jawa Barat'],
            ['nama_propinsi' => 'Jawa Timur'],
            ['nama_propinsi' => 'Lampung']
        ];
        DB::table('propinsi')->insert($propinsi);

        $kota = [
            ['id_propinsi' => 1, 'nama_kota' => 'Bantul'],
            ['id_propinsi' => 1, 'nama_kota' => 'Sleman'],
            ['id_propinsi' => 1, 'nama_kota' => 'Kulon Progo'],
            ['id_propinsi' => 5, 'nama_kota' => 'Kotabumi'],
        ];
        DB::table('kota')->insert($kota);

    }
}
