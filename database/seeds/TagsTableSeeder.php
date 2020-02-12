<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TagsTableSeeder extends Seeder
{
    
    public function run()
    {
    //     DB::table('tags')->insert([
    //         'name'                  => 'Programming',
         
    //     ]);
    //     DB::table('tags')->insert([
    //         'name'                  => 'Lifestyle',
                     
    //     ]);
    //     DB::table('tags')->insert([
    //         'name'                  => 'Machine Learning',
                       
    //     ]);
    //     DB::table('tags')->insert([
    //         'name'                  => 'Teknologi',
                     
    //     ]);
    //     DB::table('tags')->insert([
    //         'name'                  => 'Tips dan Trick',
    //     ]);
    //     DB::table('tags')->insert([
    //         'name'                  => 'coding',
         
    //     ]);
    //     DB::table('tags')->insert([
    //         'name'                  => 'database',
                     
    //     ]);
    //     DB::table('tags')->insert([
    //         'name'                  => 'artificialintelegence',
                       
    //     ]);
    //     DB::table('tags')->insert([
    //         'name'                  => 'santai',
                     
    //     ]);
    //     DB::table('tags')->insert([
    //         'name'                  => 'terkini',
    //     ]);
    //     DB::table('tags')->insert([
    //         'name'                  => 'ligaindonesia',
         
    //     ]);
    //     DB::table('tags')->insert([
    //         'name'                  => 'Lifestyle',
                     
    //     ]);
    //     DB::table('tags')->insert([
    //         'name'                  => 'algoritma',
                       
    //     ]);
    //     DB::table('tags')->insert([
    //         'name'                  => 'web developer',
                     
    //     ]);
    //     DB::table('tags')->insert([
    //         'name'                  => 'software engineer',
    //     ]);
    // }

    $faker = Faker::create('id_ID');

    	for($i = 0; $i <= 2000; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('tags')->insert([
    			'name' => $faker->name,
    		]);
        }

    }
}
