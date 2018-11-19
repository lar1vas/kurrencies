<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
           'nombre' => 'Luis Alberto',
           'apellido'  => 'Rivas',
           'celular'  => '0984847093',
           'email'  => 'larivas@gmail.com',
           'password'  => Hash::make('123456'),
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('users')->insert(array(
           'nombre' => 'Admin',
           'apellido'  => 'Test',
           'celular'  => '0984847093',
           'email'  => 'admin@kurrencies.local',
           'password'  => Hash::make('123456'),
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('users')->insert(array(
           'nombre' => 'Asesor',
           'apellido'  => 'Test',
           'celular'  => '0984847093',
           'email'  => 'asesor@kurrencies.local',
           'password'  => Hash::make('123456'),
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('users')->insert(array(
           'nombre' => 'Aliado',
           'apellido'  => 'Test',
           'celular'  => '0984847093',
           'email'  => 'aliado@kurrencies.local',
           'password'  => Hash::make('123456'),
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('users')->insert(array(
           'nombre' => 'Cajero',
           'apellido'  => 'Test',
           'celular'  => '0984847093',
           'email'  => 'cajero@kurrencies.local',
           'password'  => Hash::make('123456'),
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    }
}
