<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlternatifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alternatif')->insert([
            [
                'kode_alternatif' => 'A001',
                'nama_alternatif' => 'IRIANI',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_alternatif' => 'A002',
                'nama_alternatif' => 'NURAENI',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_alternatif' => 'A003',
                'nama_alternatif' => 'AGUSWANDI',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_alternatif' => 'A004',
                'nama_alternatif' => 'SAMAAH',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_alternatif' => 'A005',
                'nama_alternatif' => 'SAIRAH',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
