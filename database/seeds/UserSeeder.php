<?php

use Illuminate\Database\Seeder;
use DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::table('users')->insert([
    		'name' => 'Jonh Nghia',
    		'id_role' => 'Amin',
    		'email' => 'jonhnghia@gmail.com',
    		'email_verified_at' =>  date('Y-m-d H:i:s'),
    		'password' => Hash::make('password'),
    		'remember_token' => str_random(10),
    		'fullname'	=> 'minh nghia',
    		'birthday'	=> '2001-07-27',
    		'gender	'   => 'nam',
    		'address'  => 'dong lac',
    		'district'	=> 'chi linh',
    		'city'	  => 'hai duong',
    		'phone'	 => '0366729714',
    		'cmtnd'	 => '54587855454',
    		'created_at' => date('Y-m-d H:i:s'),
    		'updated_at' =>date('Y-m-d H:i:s'),
    	]);
    	
    }
}
