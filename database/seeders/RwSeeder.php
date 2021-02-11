<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RwSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rw = [
            ['id_kelurahan' => 1, 'no_rw' => "1"],
            ['id_kelurahan' => 1, 'no_rw' => "2"],
            ['id_kelurahan' => 2, 'no_rw' => "1"],
            ['id_kelurahan' => 2, 'no_rw' => "2"],
        ];
        DB::table('rws')->insert($rw);
    }
}
