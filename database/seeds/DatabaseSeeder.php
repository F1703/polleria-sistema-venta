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

        // \DB::table('users')->insert(array(
        //   'name'  => "franco",
        //   'email' =>  "franco@gmail.com",
        //   'password'  =>  bcrypt("franco"),
        //   'empleado_id' => "1",
        // ));

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






        // PROVEEDORS
        \DB::table('proveedors')->insert(array(
          'nombre'    => $faker->userName,
          'apellido'  => $faker->lastName,
          'cuit'      => $faker->randomDigitNotNull,
          'email'     => $faker->email,
          'telefono'  => $faker->phoneNumber,
        ));
        // END PROVEEDORS

        //PRODUCTO
        for ($i=0; $i <3 ; $i++) {
          $cat=\DB::table('categorias')->insertGetId(array(
            'categoria' =>  "categoria-".$i,
          ));
            for ($j=0; $j < 2; $j++) {
              $desc=\DB::table('producto_descripcions')->insertGetId(array(
                'preciocompra'  =>  "3",
                'precioventa'  =>  "4",
                'vencimiento'  => $faker->dateTime,
              ));
              \DB::table('productos')->insertGetId(array(
                'descripcion' =>  "descripcion-".$j,
                'codigo'      =>  "11".$j,
                'stock'       =>  "3",
                'stockminimo' =>  "5",
                'tipo'        =>  "unidad",
                'categoria_id'  => $cat,
                'producto_descripcion_id' => $desc,
              ));
            }
        }
        //END PRODUCTO



        // EMPLEADO
        for ($i=0; $i <1 ; $i++) {
          $dom=\DB::table('domicilios')->insertGetId(array(
            'direccion' => $faker->address,
            'numero'    =>  $faker->randomDigit,
            'barrio'    => "norte",
            'localidad_id' => "2",
          ));
          $emp=\DB::table('empleados')->insertGetId(array(
            'turno'   =>  "mañana",
            'nombre'  =>  "francos",
            'apellido'  => $faker->lastName,
            'dni'       => "12344".$i,
            'sexo'      => "masculino",
            'cargo'     => "admin",
            'telefono'  =>  $faker->phoneNumber,
            'nacimiento'  =>  $faker->dateTime,
            'domicilio_id'  => $dom,
          ));
          \DB::table('users')->insert(array(
            'name'  => "francos",
            'email' =>  $faker->email,
            'password'  =>  bcrypt("franco"),
            'empleado_id' => $emp,
          ));
          // for ($j=0; $j < 2; $j++) {
          //   $ven=\DB::table('ventas')->insertGetId(array(
          //     'fecha'   =>  $faker->dateTime,
          //     'monto'   =>  "11".$j,
          //     'empleado_id' => $emp,
          //   ));
          //   for ($k=0; $k < 3; $k++) {
          //     $cat=\DB::table('categorias')->insertGetId(array(
          //       'categoria' =>  $faker->title,
          //     ));
          //     $pro=\DB::table('productos')->insertGetId(array(
          //       'descripcion'   => $faker->randomLetter,
          //       'codigo'        => $faker->randomDigit,
          //       'stock'   => "33".$k,
          //       'stockminimo'   => "33".$k,
          //       'tipo'    => "unidad",
          //       'categoria_id'  =>  $cat,
          //     ));
          //     \DB::table('linea_venta')->insert(array(
          //       'cantidad' => "12".$k,
          //       'subtotal' => "12".$k,
          //       'producto_id' =>  $pro,
          //       'venta_id'    =>  $ven,
          //     ));
          //   }
          // }// end ventas

        }
        // // END EMPLEADO











        //CONCEPTO
        for ($i=0; $i <3 ; $i++) {
          DB::table('conceptos')->insert(array(
            'concepto'      =>  "concepto-".$i,
            'montofijo'     =>  "123".$i,
            'montovariable' => "33".$i,
            'tipo'          => "tipo-".$i,
          ));
        }
        //END CONCEPTO



    }
}
