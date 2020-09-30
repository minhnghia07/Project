<?php

use Illuminate\Database\Seeder;

class CreateRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('roles')->insert([
        	['name'=>'admin','display_name'=>'Quan tri he hong'],
        	['name'=>'guest','display_name'=>'Khach hang'],
        	['name'=>'dev','display_name'=>'Phat trien he hong'],
        	['name'=>'content','display_name'=>'Chinh sua noi dung']
        ]);
    }
}
