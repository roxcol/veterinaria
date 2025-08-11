<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RazaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('raza')->insert([
            [
                'nom_raza' => 'Tortuga patas amarillas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}
