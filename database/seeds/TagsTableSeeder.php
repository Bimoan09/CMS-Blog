<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name'                  => 'Programming',
         
        ]);
        DB::table('tags')->insert([
            'name'                  => 'Lifestyle',
                     
        ]);
        DB::table('tags')->insert([
            'name'                  => 'Machine Learning',
                       
        ]);
        DB::table('tags')->insert([
            'name'                  => 'Teknologi',
                     
        ]);
        DB::table('tags')->insert([
            'name'                  => 'Tips dan Trick',
        ]);
        DB::table('tags')->insert([
            'name'                  => 'coding',
         
        ]);
        DB::table('tags')->insert([
            'name'                  => 'database',
                     
        ]);
        DB::table('tags')->insert([
            'name'                  => 'artificialintelegence',
                       
        ]);
        DB::table('tags')->insert([
            'name'                  => 'santai',
                     
        ]);
        DB::table('tags')->insert([
            'name'                  => 'terkini',
        ]);
        DB::table('tags')->insert([
            'name'                  => 'ligaindonesia',
         
        ]);
        DB::table('tags')->insert([
            'name'                  => 'Lifestyle',
                     
        ]);
        DB::table('tags')->insert([
            'name'                  => 'algoritma',
                       
        ]);
        DB::table('tags')->insert([
            'name'                  => 'web developer',
                     
        ]);
        DB::table('tags')->insert([
            'name'                  => 'software engineer',
        ]);
    }
}
