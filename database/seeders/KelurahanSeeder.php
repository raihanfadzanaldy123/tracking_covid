<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class KelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelurahan = [
            ['id_kecamatan' => 2106, 'nama_kelurahan' => "Sukamenak"],
            ['id_kecamatan' => 2106, 'nama_kelurahan' => "Sayati"],
        ];
        DB::table('kelurahans')->insert($kelurahan);
    }
}
