<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class createMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 5; $i++) { 
            $nim = 185411143+$i;
            $mahasiswa[] = [
                'nim'       => (string)$nim,
                'nama'      => 'Krisnanto '. Str::random(10),
                'alamat'    => 'Ponorogo'. Str::random(10),
                'jenis_kel' => 'laki-laki',
                'tgl_lahir' =>  (new Carbon())->modify('-240 months')->subDays($i),
                'agama'     =>  'islam',
                'jurusan_id'=>  rand(1,5)
            ];
        }
        DB::table('mahasiswa')->insert($mahasiswa);
    }
}
