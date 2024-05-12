<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('movie')->insert([
            'title' => 'El color del dinero',
            'descripcion' => 'El estafador de billar Fast Eddie Felson encuentra al joven y prometedor jugador de billar Vincent en un bar local y ve en él una versión más joven de sí mismo.',
            'genero' => 'Drama/Deporte',
            'fecha_lanzamiento' => '27 de febrero de 1987',
            'duracion' => '1h 59m',
            'imagen' => 'ElColorDelDinero.jpg',
            'trailer' => 'color.mp4',
            'director_id' => '1',
            'actor_id' => '1',
            'semana_id' => '1',
        ]);


        DB::table('movie')->insert([
            'title' => 'Los Gemelos golpean dos veces',
            'descripcion' => 'Un hombre fisicamente perfecto e inocente busca a su hermano gemelo perdido, que es un mujeriego bajito y un estafador de poca monta.',
            'genero' => 'Comedia/Acción',
            'fecha_lanzamiento' => '9 de diciembre de 1988',
            'duracion' => '1h 47m',
            'imagen' => 'Gemelos.jpg',
            'trailer' => 'gemelos.mp4',
            'director_id' => '2',
            'actor_id' => '2',
            'semana_id' => '1',
        ]);


    
        DB::table('movie')->insert([
            'title' => 'Dead Calm',
            'descripcion' => 'Tras una tragedia, John Ingram y su mujer Rae pasan un tiempo navegando, y así conocen a un hombre que ha abandonado un barco naufragado.',
            'genero' => 'Terror/Suspense',
            'fecha_lanzamiento' => '7 de abril de 1989',
            'duracion' => '1h 36m',
            'imagen' => 'DeadCalm.jpg',
            'trailer' => 'dead.mp4',
            'director_id' => '3',
            'actor_id' => '3',
            'semana_id' => '1',
        ]);



        DB::table('movie')->insert([
            'title' => 'Staying Alive',
            'descripcion' => 'Han pasado cinco años y la fiebre del sábado noche de Tony Manero sigue viva. Ahora se pavonea hacia su mayor desafío hasta la fecha: triunfar como bailarín en el escenario de Broadway.',
            'genero' => 'Drama/Música/Romance',
            'fecha_lanzamiento' => '15 de julio de 1983',
            'duracion' => '1h 33m',
            'imagen' => 'StayingAlive.jpg',
            'trailer' => 'alive.mp4',
            'director_id' => '4',
            'actor_id' => '4',
            'semana_id' => '1',
        ]);


 
        DB::table('movie')->insert([
            'title' => 'Yo "El vaquilla"',
            'descripcion' => 'Juan José Moreno Cuenca, alias El Vaquilla, tiene 23 años y cuenta su historia como delincuente desde la prisión Ocaña I. Huérfano de padre, el delincuente narra su infancia y cómo todo cambió cuando su madre ingresó en prisión.',
            'genero' => 'Acción/Biografía/Drama',
            'fecha_lanzamiento' => '8 de noviembre de 1985',
            'duracion' => '1h 45m',
            'imagen' => 'elvaquilla.jpg',
            'trailer' => 'vaquilla.mp4',
            'director_id' => '5',
            'actor_id' => '5',
            'semana_id' => '1',
        ]);


 
        DB::table('movie')->insert([
            'title' => 'Batman',
            'descripcion' => 'El Caballero Oscuro de Gotham City comienza su guerra contra el crimen, siendo su primer gran enemigo Jack Napier, un criminal que se convierte en el payaso homicida Joker.',
            'genero' => 'Acción/Aventura',
            'fecha_lanzamiento' => '29 de septiembre de 1989',
            'duracion' => '2h 6m',
            'imagen' => 'Batman.jpg',
            'trailer' => 'batman.mp4',
            'director_id' => '6',
            'actor_id' => '6',
            'semana_id' => '1',
        ]);

        DB::table('movie')->insert([
            'title' => 'Los goonies',
            'descripcion' => 'Los Goonies son un grupo de amigos que viven en Goon Docks, Astoria, pero sus casas han sido compradas y van a ser demolidas. Sin embargo, vivirán su última aventura en busca de un tesoro que pueda salvar el barrio.',
            'genero' => 'Aventura/Comedia/Familiar',
            'fecha_lanzamiento' => '24 de julio de 1985',
            'duracion' => '1h 54m',
            'imagen' => 'goonies.jpg',
            'trailer' => 'goonies.mp4',
            'director_id' => '7',
            'actor_id' => '7',
            'semana_id' => '1',
        ]);

        DB::table('movie')->insert([
            'title' => 'Torrente: El brazo tonto de la ley',
            'descripcion' => 'José Luis Torrente, un expolicía, lucha contra la mafia oriental en Madrid.',
            'genero' => 'Comedia/Crimen',
            'fecha_lanzamiento' => '13 de marzo de 1998',
            'duracion' => '1h 37m',
            'imagen' => 'torrente.jpg',
            'trailer' => 'torrente.mp4',
            'director_id' => '8',
            'actor_id' => '8',
            'semana_id' => '2',
        ]);
 
        DB::table('movie')->insert([
            'title' => 'VIVEN',
            'descripcion' => 'Un equipo de rugby de Uruguay, aislado en los Andes tras un accidente aereo, tiene que tomar medidas desesperadas para sobrevivir.',
            'genero' => 'Aventura/Drama/Biografía',
            'fecha_lanzamiento' => '15 de enero de 1993',
            'duracion' => '2h 8m',
            'imagen' => 'viven.jpg',
            'trailer' => 'viven.mp4',
            'director_id' => '9',
            'actor_id' => '9',
            'semana_id' => '2',
        ]);

        DB::table('movie')->insert([
            'title' => 'Nadie Conoce a Nadie',
            'descripcion' => 'Un aspirante a novelista recibe un cargo que cambiará su vida por completo. ',
            'genero' => 'Drama/Suspense',
            'fecha_lanzamiento' => '26 de noviembre de 1999',
            'duracion' => '1h 48m',
            'imagen' => 'nadieconoceanadie.jpg',
            'trailer' => 'nadie.mp4',
            'director_id' => '10',
            'actor_id' => '10',
            'semana_id' => '2',
        ]);

        
        DB::table('movie')->insert([
            'title' => 'The Trigger Effect',
            'descripcion' => 'Un apagón deja a los afectados considerando qué es necesario, qué es legal y qué es cuestionable para sobrevivir en un entorno depredador.',
            'genero' => 'Drama/Suspense',
            'fecha_lanzamiento' => '30 de agosto de 1996',
            'duracion' => '1h 34m',
            'imagen' => 'triggereffecet.jpg',
            'trailer' => 'triger.mp4',
            'director_id' => '11',
            'actor_id' => '11',
            'semana_id' => '2',
        ]);

             
        DB::table('movie')->insert([
            'title' => 'Astérix y Obélix contra César',
            'descripcion' => 'Los habitantes de la última aldea no conquistada de la Galia utilizan una poción mágica para mantener su independencia de los invasores romanos.',
            'genero' => 'Aventura/Comedia/Familiar',
            'fecha_lanzamiento' => '3 de diciembre de 1999',
            'duracion' => '1h 49m',
            'imagen' => 'asterixyobelix.jpg',
            'trailer' => 'asterix.mp4',
            'director_id' => '12',
            'actor_id' => '12',
            'semana_id' => '2',
        ]);

        DB::table('movie')->insert([
            'title' => 'Bichos una aventura en miniatura',
            'descripcion' => 'Una hormiga inadaptada, buscando a guerreros que la ayuden a salvar su colonia de unos aterradores saltamontes, recluta a un batallón que resulta ser una troupe de circo.',
            'genero' => 'Animación/Aventura/Comedia',
            'fecha_lanzamiento' => '5 de febrero de 1999',
            'duracion' => '1h 35m',
            'imagen' => 'bichos.jpg',
            'trailer' => 'bichos.mp4',
            'director_id' => '13',
            'actor_id' => '13',
            'semana_id' => '2',
        ]);

        DB::table('movie')->insert([
            'title' => 'El paciente inglés',
            'descripcion' => 'Al final de la Segunda Guerra Mundial, una joven enfermera atiende a una víctima de un accidente de avión con graves quemaduras. Su pasado se muestra en flashbacks, revelando una implicación en una fatídica relación amorosa.',
            'genero' => 'Drama/Romance/Bélico',
            'fecha_lanzamiento' => '19 de febrero de 1997',
            'duracion' => '2h 42m',
            'imagen' => 'elpaciente.jpg',
            'trailer' => 'paciente.mp4',
            'director_id' => '14',
            'actor_id' => '14',
            'semana_id' => '2',
        ]);

        DB::table('movie')->insert([
            'title' => 'Cars',
            'descripcion' => 'Un coche de carreras llamado Rayo McQueen se encuentra en Radiador Springs, donde descubre el verdadero significado de la amistad y la familia.',
            'genero' => 'Animación/Aventura/Comedia',
            'fecha_lanzamiento' => '6 de julio de 2006',
            'duracion' => '1h 56m',
            'imagen' => 'cars.jpg',
            'trailer' => 'cars.mp4',
            'director_id' => '15',
            'actor_id' => '15',
            'semana_id' => '3',
        ]);

        DB::table('movie')->insert([
            'title' => 'Avatar',
            'descripcion' => 'Un marine parapléjico enviado a la luna Pandora en una misión única se debate entre seguir sus órdenes y proteger el mundo que siente como su hogar.',
            'genero' => 'Acción/Aventura/Fantasía',
            'fecha_lanzamiento' => '18 de diciembre de 2009',
            'duracion' => '2h 42m',
            'imagen' => 'avatar.jpg',
            'trailer' => 'avatar.mp4',
            'director_id' => '16',
            'actor_id' => '16',
            'semana_id' => '3',
        ]);

        DB::table('movie')->insert([
            'title' => 'Spider-Man',
            'descripcion' => 'Al ser mordido por una araña modificada genéticamente, un chico de instituto tímido y estudioso adquiere habilidades de araña que al final tendrá que usar para luchar contra el mal como un superhéroe tras una tragedia familiar.',
            'genero' => 'Acción/Aventura/Familiar',
            'fecha_lanzamiento' => '21 de julio de 2002',
            'duracion' => '2h 1m',
            'imagen' => 'spiderman.jpg',
            'trailer' => 'spiderman.mp4',
            'director_id' => '17',
            'actor_id' => '17',
            'semana_id' => '3',
        ]);

        DB::table('movie')->insert([
            'title' => 'Buscando a nemo',
            'descripcion' => 'Cuando su hijo es capturado, un tímido pez payaso se embarca en un viaje para traerlo a casa.',
            'genero' => 'Animación/Aventura/Comedia',
            'fecha_lanzamiento' => '28 de noviembre de 2003',
            'duracion' => '1h 40min',
            'imagen' => 'nemo.jpg',
            'trailer' => 'nemo.mp4',
            'director_id' => '18',
            'actor_id' => '18',
            'semana_id' => '3',
        ]);

        
        DB::table('movie')->insert([
            'title' => 'La palya',
            'descripcion' => 'Richard viaja a Tailandia y se encuentra en posesión de un extraño mapa. Los rumores dicen que conduce a una solitaria playa paradisíaca, una dicha tropical. Emocionado e intrigado, se dispone a encontrarla.',
            'genero' => 'Aventura/Drama/Romance',
            'fecha_lanzamiento' => '25 de febrero de 2000',
            'duracion' => '1h 59min',
            'imagen' => 'laplaya.jpg',
            'trailer' => 'playa.mp4',
            'director_id' => '19',
            'actor_id' => '19',
            'semana_id' => '3',
        ]);

                
        DB::table('movie')->insert([
            'title' => 'Chicken Run',
            'descripcion' => 'Cuando un gallo entra aparentemente volando en una granja de pollos, las gallinas lo ven como una oportunidad para escapar de sus malvados dueños.',
            'genero' => 'Animación/Aventura/Comedia',
            'fecha_lanzamiento' => '14 de agosto de 2000',
            'duracion' => '1h 24min',
            'imagen' => 'chicken.jpg',
            'trailer' => 'chicken.mp4',
            'director_id' => '20',
            'actor_id' => '20',
            'semana_id' => '3',
        ]);

        DB::table('movie')->insert([
            'title' => 'El patriota',
            'descripcion' => 'El pacífico granjero Benjamin Martin se ve impulsado a liderar la milicia colonial durante la Revolución Americana cuando un sádico oficial británico asesina a su hijo.',
            'genero' => 'Acción/Drama/Historia',
            'fecha_lanzamiento' => '27 de junio de 2000',
            'duracion' => '2h 45min',
            'imagen' => 'patriota.jpg',
            'trailer' => 'patriota.mp4',
            'director_id' => '21',
            'actor_id' => '21',
            'semana_id' => '3',
        ]);

        DB::table('movie')->insert([
            'title' => 'Niños Grandes',
            'descripcion' => 'Tras el fallecimiento de su entrenador de baloncesto en el instituto, cinco buenos amigos y antiguos compañeros de equipo se reúnen durante el fin de semana del 4 de julio',
            'genero' => 'Comedia',
            'fecha_lanzamiento' => '30 de julio de 2010',
            'duracion' => '1h 42min',
            'imagen' => 'ninñosgrandes.jpg',
            'trailer' => 'gradnes.mp4',
            'director_id' => '22',
            'actor_id' => '22',
            'semana_id' => '4',
        ]);

        DB::table('movie')->insert([
            'title' => '13 asesinos',
            'descripcion' => 'Varios asesinos forman un grupo con la misión suicida de asesinar a un hombre malvado.',
            'genero' => 'Acción/Drama/Aventura',
            'fecha_lanzamiento' => '12 de ajosto de 2011',
            'duracion' => '2h 21min',
            'imagen' => '13asesinos.jpg',
            'trailer' => 'asesino.mp4',
            'director_id' => '23',
            'actor_id' => '23',
            'semana_id' => '4',
        ]);
        

        DB::table('movie')->insert([
            'title' => 'Como entrenar a tu dragón',
            'descripcion' => 'Un desventurado joven vikingo, que aspira a cazar dragones, se convierte en el improbable amigo de un joven dragón, y aprende que puede haber más en las criaturas de lo que suponía.',
            'genero' => 'Animación/Aventura/Acción',
            'fecha_lanzamiento' => '26 de marzo de 2010',
            'duracion' => '1h 38min',
            'imagen' => 'dragon.jpg',
            'trailer' => 'dragon.mp4',
            'director_id' => '24',
            'actor_id' => '24',
            'semana_id' => '4',
        ]);

       

        DB::table('movie')->insert([
            'title' => 'El peleador',
            'descripcion' => 'Basado en la historia de Micky Ward, un joven boxeador que intenta escapar de la sombra de su hermano mayor, más famoso pero problemático, y conseguir su propia oportunidad de alcanzar la grandeza.',
            'genero' => 'Acción/Biografía/Drama',
            'fecha_lanzamiento' => '4 de febrero de 2011',
            'duracion' => '1h 56min',
            'imagen' => 'elpeleador.jpg',
            'trailer' => 'peleador.mp4',
            'director_id' => '25',
            'actor_id' => '25',
            'semana_id' => '4',
        ]);

        
        DB::table('movie')->insert([
            'title' => 'Centurion',
            'descripcion' => 'Un grupo disidente de soldados romanos lucha por su vida tras las líneas enemigas después de que su legión sea devastada en un ataque de guerrilla.',
            'genero' => 'Acción/Drama/Historia',
            'fecha_lanzamiento' => '23 de abril de 2010',
            'duracion' => '1h 37min',
            'imagen' => 'centurion.jpg',
            'trailer' => 'centurion.mp4',
            'director_id' => '26',
            'actor_id' => '26',
            'semana_id' => '4',
        ]);


        DB::table('movie')->insert([
            'title' => 'The Reef',
            'descripcion' => 'Cinco jóvenes se disponen a vivir una gran aventura con un bote rumbo a Indonesia. Repentinamente la embarcación se voltea, dejándolos en medio del mar. La única forma de salvarse es nadar a tierra firme, pero un tiburón los acecha.',
            'genero' => 'Aventura/Terror/Suspense',
            'fecha_lanzamiento' => '17 de marzo de 2011',
            'duracion' => '1h 34min',
            'imagen' => 'thereef.jpg',
            'trailer' => 'reef.mp4',
            'director_id' => '27',
            'actor_id' => '27',
            'semana_id' => '4',
        ]);

        DB::table('movie')->insert([
            'title' => 'Faster',
            'descripcion' => 'Un exconvicto se mete en una serie de asesinatos aparentemente no relacionados. Le siguen la pista un policía veterano con secretos propios y un asesino a sueldo egocéntrico.',
            'genero' => 'Acción/Crimen/Drama',
            'fecha_lanzamiento' => '24 de noviembre de 2010',
            'duracion' => '1h 38min',
            'imagen' => 'faster.jpg',
            'trailer' => 'faster.mp4',
            'director_id' => '28',
            'actor_id' => '28',
            'semana_id' => '4',
        ]);

    }
    }

