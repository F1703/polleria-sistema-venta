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
                  'idpais'        =>  $country,
              ));
                for ($k=0; $k <5 ; $k++) {
                  $city=\DB::table('localidads')->insert(array(
                      'localidad' => $faker->city,
                      'idprovincia' => $state,
                  ));
                }//for
            }//for
        }//for
    }
}
