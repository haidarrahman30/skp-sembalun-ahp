<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubKriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_kriteria')->insert([
            [
                'kode_sub_kriteria' => 'SK001',
                'kriteria_id' => '1',
                'nama_sub_kriteria' => '< 2.500 Meter Persegi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_sub_kriteria' => 'SK002',
                'kriteria_id' => '1',
                'nama_sub_kriteria' => '2.500 - 5000 Meter Persegi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_sub_kriteria' => 'SK003',
                'kriteria_id' => '1',
                'nama_sub_kriteria' => '> 5.000 Meter Persegi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //kriteria 2
            [
                'kode_sub_kriteria' => 'SK004',
                'kriteria_id' => '2',
                'nama_sub_kriteria' => 'Jumlah Tanggungan 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_sub_kriteria' => 'SK005',
                'kriteria_id' => '2',
                'nama_sub_kriteria' => 'Jumlah Tanggungan 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_sub_kriteria' => 'SK006',
                'kriteria_id' => '2',
                'nama_sub_kriteria' => 'Jumlah Tanggungan 4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //kriteria 3
            [
                'kode_sub_kriteria' => 'SK007',
                'kriteria_id' => '3',
                'nama_sub_kriteria' => '500 - 600 Ribu ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_sub_kriteria' => 'SK008',
                'kriteria_id' => '3',
                'nama_sub_kriteria' => '600 - 750 Ribu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_sub_kriteria' => 'SK009',
                'kriteria_id' => '3',
                'nama_sub_kriteria' => '> 750.000',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
