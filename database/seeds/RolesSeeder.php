<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(array(
           'name' => 'Admin',
           'guard_name'  => 'web',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
    	));

        DB::table('roles')->insert(array(
           'name' => 'Asesor',
           'guard_name'  => 'web',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
    	));

        DB::table('roles')->insert(array(
           'name' => 'Aliado',
           'guard_name'  => 'web',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
    	));

    	DB::table('roles')->insert(array(
           'name' => 'Cajero',
           'guard_name'  => 'web',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
    	));
    }
}
