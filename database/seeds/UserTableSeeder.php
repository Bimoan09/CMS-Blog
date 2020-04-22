<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            DB::table('users')->insert([
                'name' => 'bian',
                'email' => 'bian@gmail.com',
                'username' => 'bianpras',
                'password' => bcrypt('rahasia'),
                'user_type' => 'member',
                'token' => 'qwerty',
            ]);


            DB::table('users')->insert([
                'name' => 'astri',
                'email' => 'astri@gmail.com',
                'username' => 'astrimawar',
                'password' => bcrypt('rahasia'),
                'user_type' => 'internaladmin',
                'token' => 'qwerty',
            ]);

    }
}
