<?php

use Illuminate\Database\Seeder;

class SubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_categories')->insert([
            'name'                  => 'OOP Dasar',
            'category_id'           => 1
        ]);
        DB::table('sub_categories')->insert([
            'name'                  => 'Fungsional Pogramming',
            'category_id'           => 1
        ]);
        DB::table('sub_categories')->insert([
            'name'                  => 'Anak muda',
            'category_id'           => 2
        ]);
        DB::table('sub_categories')->insert([
            'name'                  => 'Internet',
            'category_id'           => 4
        ]);
        DB::table('sub_categories')->insert([
            'name'                  => 'Industri 04',
            'category_id'           => 4
        ]);
    }
}
