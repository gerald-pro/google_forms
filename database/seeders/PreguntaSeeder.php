<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('preguntas')->insert([
            'nro' => 1,
            'descripcion' => "¿Conoce usted el estatuto organico vigente de la universidad? (A.D.E)",
            'encuesta_id' => 1
        ]);
    }
}
