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
        DB::table('kelurahans')->insert([
            ['id' => 1, 'id_kecamatan']
        ])
    }
}
