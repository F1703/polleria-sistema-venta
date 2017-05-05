<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $faker=Faker::create();

        \DB::table('users')->insert(array(
          'name'  => "franco",
          'email' =>  "franco@gmail.com",
          'password'  =>  "franco",
        ));

        for ($i=0; $i < 5; $i++) {
          $country=\DB::table('pais')->insertGetId(array(
            'pais'  =>  $faker->country,
          ));
            for ($j=0; $j <3 ; $j++) {
              $state=\DB::table('provincias')->insertGetId(array(
                  'provincia'   =>  $faker->state,
                  'codigopostal'  =>  $faker->postcode,
                  'pais_id'        =>  $country,
              ));
                for ($k=0; $k <5 ; $k++) {
                  $city=\DB::table('localidads')->insert(array(
                      'localidad' => $faker->city,
                      'provincia_id' => $state,
                  ));
                }//for
            }//for
        }//for



        //emplead
        for ($i=0; $i <2 ; $i++) {
          # code...
          $dom=\DB::table('domicilios')->insertGetId(array(
            'direccion' => $faker->address,
            'numero'    =>  $faker->randomDigit,
            'barrio'    => "norte",
            'localidad_id' => "2",
          ));
          \DB::table('empleados')->insert(array(
            'turno'   =>  "mañana",
            'nombre'  =>  $faker->name,
            'apellido'  => $faker->lastName,
            'dni'       => "12344".$i,
            'sexo'      => "masculino",
            'cargo'     => "admin",
            'telefono'  =>  $faker->phoneNumber,
            'nacimiento'  =>  $faker->dateTime,
            'domicilio_id'  => $dom,
          ));
        }
        \DB::table('proveedors')->insert(array(
          'nombre'    => $faker->userName,
          'apellido'  => $faker->lastName,
          'cuit'      => $faker->randomDigitNotNull,
          'email'     => $faker->email,
          'telefono'  => $faker->phoneNumber,
        ));

        for ($i=0; $i <3 ; $i++) {
          # code...
          $cat=\DB::table('categorias')->insertGetId(array(
            'categoria' =>  "categoria-".$i,
          ));
            for ($j=0; $j < 2; $j++) {
              # code...
              $pro=\DB::table('productos')->insertGetId(array(
                'descripcion' =>  "descripcion-".$j,
                'codigo'      =>  "11".$j,
                'stock'       =>  "3",
                'stockminimo' =>  "5",
                'tipo'        =>  "unidad",
                'categoria_id'  => $cat,
              ));
              for ($k=0; $k < 2; $k++) {
                # code...
                \DB::table('producto_descripcions')->insert(array(
                  'preciocompra'  =>  "3",
                  'precioventa'  =>  "4",
                  'vencimiento'  => $faker->dateTime,
                  'producto_id'   =>  $pro,
                ));

              }
            }
        }

    }
}
