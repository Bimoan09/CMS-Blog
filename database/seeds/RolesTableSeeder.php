<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name'                  => 'superadmin',
            'display_name'          => 'Superadmin',
            'description'           => 'Role superadmin mempunyai hak akses penuh di aplikasi',
            'created_at'            =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'            =>  Carbon::now()->format('Y-m-d H:i:s'),   
        ]);
        
        DB::table('roles')->insert([
            'name'                  => 'admin',
            'display_name'          => 'Admin',
            'description'           => 'Role admin hanya mempunyai beberapa hak akses di aplikasi, seperti approval berita yang masuk',
            'created_at'            =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'            =>  Carbon::now()->format('Y-m-d H:i:s'),   
        ]);

        DB::table('roles')->insert([
            'name'                  => 'editor',
            'display_name'          => 'Editor',
            'description'           => 'Role editor hanya mempunya beberapa akses di aplikasi',
            'created_at'            =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'            =>  Carbon::now()->format('Y-m-d H:i:s'),   
        ]);
        DB::table('roles')->insert([
            'name'                  => 'member',
            'display_name'          => 'Member',
            'description'           => 'Role member hanya bisa menulis berita saja',
            'created_at'            =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'            =>  Carbon::now()->format('Y-m-d H:i:s'),   
        ]);
    }
}
