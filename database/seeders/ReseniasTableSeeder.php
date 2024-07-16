<?php

// database/seeders/ReseniasTableSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Resenia;

class ReseniasTableSeeder extends Seeder
{
    public function run()
    {
        $resenias = [
            [
                'contenido' => 'Esta es una reseña ejemplo 1.',
                'calificacion' => 5,
            ],
            [
                'contenido' => 'Esta es una reseña ejemplo 2.',
                'calificacion' => 3,
            ],
            // Agrega más reseñas aquí
        ];

        foreach ($resenias as $resenia) {
            Resenia::create([
                'contenido' => $resenia['contenido'],
                'calificacion' => $resenia['calificacion'],
            ]);
        }
    }
}

