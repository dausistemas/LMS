<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nombre' => 'christian hardy',
            'apellidos' => 'torres caballero',
            'email' => 'hardy@kazpacio.com',
            'password' => bcrypt('19076066'),
            'urlmg' => 'default.jpg',
        ]);
    }
}
