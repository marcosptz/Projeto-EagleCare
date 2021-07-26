<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'name'=> 'Admin',
                    'email'=> 'admin@admin',
                    'password'=> bcrypt('Admin123'),
                    'nivel'=> '1'
                ],
                [
                    'name'=>'Usuario',
                    'email'=>'usuario@usuario',
                    'password'=>bcrypt('Usuario123'),
                    'nivel'=>'2'
                ],

            ]
        );
    }
}
