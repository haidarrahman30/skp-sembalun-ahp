<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisBansosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_bansos')->insert([
            [
                'nama_jenis_bansos' => 'PKH',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_jenis_bansos' => 'BPNT',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_jenis_bansos' => 'BST',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_jenis_bansos' => 'BLT',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
