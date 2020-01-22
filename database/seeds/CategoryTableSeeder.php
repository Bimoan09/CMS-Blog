<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name'                  => 'Programming',
            'slug'                  => 'ini-programming',
            'meta_tag_description'  => 'Ini Programming',
            'asigned'               => '1',
        ]);
        DB::table('categories')->insert([
            'name'                  => 'Lifestyle',
            'slug'                  => 'ini-lifestytle',
            'meta_tag_description'  => 'Ini Lifestyle',
            'asigned'               => '1',
        ]);
        DB::table('categories')->insert([
            'name'                  => 'Machine Learning',
            'slug'                  => 'ini machine learning',
            'meta_tag_description'  => 'Ini MachineLEarning',
            'asigned'               => '0',
        ]);
        DB::table('categories')->insert([
            'name'                  => 'Teknologi',
            'slug'                  => 'tekno',
            'meta_tag_description'  => 'Ini Teknologi',
            'asigned'               => '0',
        ]);
        DB::table('categories')->insert([
            'name'                  => 'Tips dan Trick',
            'slug'                  => 'tips-trick',
            'meta_tag_description'  => 'Ini Tips  and trick',
            'asigned'               => '0',
        ]);
    }
}
