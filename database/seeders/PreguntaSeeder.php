<?php

namespace Database\Seeders;

use App\Models\Pregunta;
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
        Pregunta::create(
            [
                'nro' => 1,
                'descripcion' => "¿Conoce usted el estatuto organico vigente de la universidad?",
                'encuesta_id' => 1
            ]
        );
        Pregunta::create(
            [
                'nro' => 2,
                'descripcion' => "¿Es actualizado y responde al encargo social?",
                'encuesta_id' => 1
            ]
        );
        Pregunta::create(
            [
                'nro' => 3,
                'descripcion' => "¿El Plan de Desarrollo Estratégico de la Carrera es actualizado y coherente con su Misión y sus Objetivos?",
                'encuesta_id' => 1
            ]
        );
    }
}
