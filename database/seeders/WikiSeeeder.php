<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class WikiSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wiki')->insert([
            [
                'titulo'        => 'La manera más fácil para entender finanzas',
                'descripcion'   => 'Video educativo que explica como funcionan las finanzas',
                'video'         => 'https://www.youtube.com/watch?v=dUiZ5is-Chw',
                'visto'         => 0,
                'created_at'    => Carbon::now(),
            ],
            [
                'titulo'        => 'Educación financiera para principiantes',
                'descripcion'   => 'Material enfocado para educar a personas principiantes en la disciplina de las finanzas',
                'video'         => 'https://www.youtube.com/watch?v=9sCVcWD1Svs',
                'visto'         => 0,
                'created_at'    => Carbon::now(),
            ],
            [
                'titulo'        => 'Tendencias sobre finanzas del 2023 que te ayudarán con tu dinero',
                'descripcion'   => 'Video que describe las tendencias financieras para el año 2023',
                'video'         => 'https://www.youtube.com/watch?v=BA4xQd5uFZE',
                'visto'         => 0,
                'created_at'    => Carbon::now(),
            ],
        ]);
    }
}
