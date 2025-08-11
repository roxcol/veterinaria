<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         DB::table('servicio')->insert([
            [
                'nom_servicio' => 'Consulta General',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom_servicio' => 'Vacunación',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
