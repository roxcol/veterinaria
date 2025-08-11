<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DireccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('direccion')->insert([
            [
                'nom_direccion' => 'Av. Libertador 123',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom_direccion' => 'Calle Sucre 456',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
