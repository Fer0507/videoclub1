<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Movie; // Asegúrate de incluir el modelo Movie

class DatabaseSeeder extends Seeder
{
    // Definimos el array de películas como variable privada
    private $arrayPeliculas = [
        [
            'title' => 'Inception',
            'year' => '2010',
            'director' => 'Christopher Nolan',
            'poster' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGNN3d7vIEZX117i5xZsDpxL-r89EnvLg_DA&s',
            'rented' => false,
            'synopsis' => 'A thief who steals corporate secrets through the use of dream-sharing technology.',
        ],



        [
            'title' => 'El Padrino',
            'year' => 1972,
            'director' => 'Francis Ford Coppola',
            'poster' => 'https://http2.mlstatic.com/D_NQ_NP_717822-MLC50435054935_062022-O.webp',
            'synopsis' => 'La historia de la familia Corleone, liderada por Vito Corleone.',
            'rented' => false
        ],

        [
            'title' => 'Pulp Fiction',
            'year' => 1994,
            'director' => 'Quentin Tarantino',
            'poster' => 'https://m.media-amazon.com/images/I/71c05lTE03L._AC_SY679_.jpg',
            'synopsis' => 'Una serie de historias entrelazadas en el mundo criminal de Los Ángeles.',
            'rented' => false
        ],
        [
            'title' => 'El Caballero Oscuro',
            'year' => 2008,
            'director' => 'Christopher Nolan',
            'poster' => 'https://i.pinimg.com/originals/a6/00/a8/a600a8339308d9fc74465215da537edf.jpg',
            'synopsis' => 'Batman enfrenta al Joker, un peligroso villano que amenaza la ciudad de Gotham.',
            'rented' => true
        ],
        [
            'title' => 'Forrest Gump',
            'year' => 1994,
            'director' => 'Robert Zemeckis',
            'poster' => 'https://i.pinimg.com/736x/52/29/99/5229997934b5b5acfa512b32db0091fd.jpg',
            'synopsis' => 'Un hombre con un coeficiente intelectual bajo pero gran corazón experimenta eventos históricos.',
            'rented' => false
        ],
        [
            'title' => 'La Lista de Schindler',
            'year' => 1993,
            'director' => 'Steven Spielberg',
            'poster' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBFdp_nlk26Bww43e4FYaWbxhy_VHhWZJtTQ&s',
            'synopsis' => 'La historia de Oskar Schindler, quien salvó a más de mil judíos durante el Holocausto.',
            'rented' => false
        ],
        [
            'title' => 'El Señor de los Anillos: La Comunidad del Anillo',
            'year' => 2001,
            'director' => 'Peter Jackson',
            'poster' => 'https://m.media-amazon.com/images/I/51Qvs9i5a%2BL._AC_.jpg',
            'synopsis' => 'Frodo Bolsón debe llevar el Anillo Único al Monte del Destino para destruirlo.',
            'rented' => true
        ],
        [
            'title' => 'Star Wars: Episodio IV - Una Nueva Esperanza',
            'year' => 1977,
            'director' => 'George Lucas',
            'poster' => 'https://m.media-amazon.com/images/I/81aA7hEEykL._AC_SY679_.jpg',
            'synopsis' => 'La primera película de Star Wars, donde Luke Skywalker se une a la Alianza Rebelde.',
            'rented' => false
        ]
        // Agrega más películas según sea necesario
    ];



    private function seedCatalog()
    {
        // Borrar el contenido de la tabla movies
        DB::table('movies')->delete();

        // Agregar las películas al catálogo
        foreach ($this->arrayPeliculas as $pelicula) {
            $p = new Movie;
            $p->title = $pelicula['title'];
            $p->year = $pelicula['year'];
            $p->director = $pelicula['director'];
            $p->poster = $pelicula['poster'];
            $p->rented = $pelicula['rented'];
            $p->synopsis = $pelicula['synopsis'];
            $p->save();
        }
    }
    private function seedUsers()
    {
        // Borrar el contenido de la tabla users
        DB::table('users')->truncate();

        // Crear usuarios de prueba
        DB::table('users')->insert([
            [
                'name' => 'Usuario1',
                'email' => 'usuario1@example.com',
                'password' => bcrypt('password123')  // Encripta la contraseña
            ],
            [
                'name' => 'Usuario2',
                'email' => 'usuario2@example.com',
                'password' => bcrypt('password456')  // Encripta la contraseña
            ]
        ]);
    }
    public function run()
    {
        self::seedUsers();
        $this->command->info('Tabla usuarios inicializada con datos!');
    }
}