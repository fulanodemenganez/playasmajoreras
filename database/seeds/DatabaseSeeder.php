<?php

use Illuminate\Database\Seeder;
use App\Capa;
use App\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

   //metemos el array con los datos
	 private $arrayCapas = array(
        array(
            'pk' => '0',
            'nombre' => 'Cofete',
            'imagen' => '../public/img/cofete.jpg',
            'descripcion' => ' Es un lugar que impresiona tanto por sus dimensiones, como por la naturaleza salvaje que la rodea.
Además de una increíble playa de más de 12 kilómetros de longitud, podemos disfrutar también del Macizo Montañoso de Jandía
(con las montañas más altas de Fuerteventura), que protege toda la playa por el este, del Islote, una isla unida a la playa, del Roque del Moro, una gigantesca roca en el mar colocada en vertical, de la enigmática Casa de los Winter, o del pequeño poblado de Cofete, con su restaurante de pescado, su mirador y su pequeña sala de exposiciones sobre el lugar.'
        ),
        array(
            'pk' => '1',
            'nombre' => 'Sotavento',
            'imagen' => '../public/img/sotavento.jpg',
            'descripcion' => 'La Playa de Sotavento es una de las más famosas de Fuerteventura y es la que casi siempre sale fotografiada en los folletos turísticos, con aguas cristalinas y arena blanca.
Esta zona de playas se encuentra al sur de Costa Calma, y al no tener apenas hoteles, y debido también a su gran tamaño, nunca tienen mucha gente, excepto practicantes de Windsurfing y Kiteboarding.'
        )
    );



	 private $arrayUsers = array(
        array(
            'name' => 'Carlos Cifuentes',
            'email' => 'c.cifuentes@gmail.com',
            'password' => 'majada'
        ),
        array(
            'name' => 'Andrea Garcia',
            'email' => 'a.garcia@gmail.com',
            'password' => 'majada'
        )
    );

    private function seedCatalog()
    {
    	DB::table('capas')->delete();
    	foreach( $this->arrayCapas as $capa ) {
          $c = new Capa;
          $c->nombre = $capa['nombre'];
          $c->imagen = $capa['imagen'];
          $c->descripcion = $capa['descripcion'];
          $c->save();
        }

    }

    private function seedUsers()
    {
    	DB::table('users')->delete();
    	foreach( $this->arrayUsers as $user ) {
          $c = new User;
          $c->name = $user['name'];
          $c->email = $user['email'];
          $c->password = bcrypt($user['password']);
          $c->save();
        }

    }

    public function run()
    {
      self::seedCatalog();
	  $this->command->info('Tabla capas inicializada con datos!');

	  self::seedUsers();
	  $this->command->info('Tabla users inicializada con datos!');
	}

}
