<?php

    namespace Database\Seeders;

    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;

    class PeliculasSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //
            DB::table('peliculas')->insert([
                [
                    'pelicula_id' => 1,
                    'pais_fk'=> 2,
                    'titulo' => 'Viuda Negra',
                    'precio' => 1400,
                    'fecha_estreno' => '2021-11-11',
                    'descripcion' => 'Natasha Romanoff, alias Viuda Negra, se enfrenta a las partes más oscuras de su historia cuando surge una peligrosa conspiración con vínculos con su pasado.',
                    'poster' => 'viuda-negra.jpg',
                    'poster_descripcion' => 'viuda negra poster',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'pelicula_id' => 2,
                    'pais_fk'=> 2,
                    'titulo' => 'Space Jam: Nuevas Leyendas',
                    'precio' => 1600,
                    'fecha_estreno' => '2021-09-04',
                    'descripcion' => 'Secuela de la cinta original de 1996, Space Jam, protagonizada por Michael Jordan. En esta segunda parte, la super estrella de la NBA es LeBron James, quien queda atrapado junto a su hijo Dom en un extraño lugar, un espacio digital de una fuerza todopoderosa y malvada conocida como A.I. Para volver a casa y poner a salvo a su hijo, el jugador de baloncesto deberá unir fuerzas con Bugs Bunny, Lola Bunny y el resto de personajes de los Looney Tunes para enfrentarse en un partido de baloncesto a los campeones digitalizados por inteligencia artificial.',
                    'poster' => 'space-jam2.jpg',
                    'poster_descripcion' => 'space jam poster',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]
            ]);
        }
    }
