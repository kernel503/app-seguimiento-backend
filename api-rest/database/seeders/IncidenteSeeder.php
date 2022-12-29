<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class IncidenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('incidente')->insert([
            'descripcion' => 'Tráfico pesado.',
            'activo' => true,
        ]);
        DB::table('incidente')->insert([
            'descripcion' => 'Vehículo quedado.',
            'activo' => true,
        ]);
        DB::table('incidente')->insert([
            'descripcion' => 'Reten vehicular',
            'activo' => true,
        ]);
        DB::table('incidente')->insert([
            'descripcion' => 'Protesta.',
            'activo' => true,
        ]);
    }
}
