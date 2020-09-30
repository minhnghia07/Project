<?php

use Illuminate\Database\Seeder;
use DB;
class CategoriesSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::table('categories')->insert([
    		// [
    		// 	'name' =>'Cappuccino',
    		// 	'created_at' => date('Y-m-d H:i:s'),
    		// 	'updated_at' =>date('Y-m-d H:i:s')
    		// ],

    		// [
    		// 	'name' =>'Americano',
    		// 	'created_at' => date('Y-m-d H:i:s'),
    		// 	'updated_at' =>date('Y-m-d H:i:s')
    		// ],

    		// [
    		// 	'name' =>'Mocha ',
    		// 	'created_at' => date('Y-m-d H:i:s'),
    		// 	'updated_at' =>date('Y-m-d H:i:s')
    		// ],

    		// [
    		// 	'name' =>'Coffee Latte',
    		// 	'created_at' => date('Y-m-d H:i:s'),
    		// 	'updated_at' =>date('Y-m-d H:i:s')
    		// ], 

    		// [
      //           'name' =>'Coffee ',
    		// 	'created_at' => date('Y-m-d H:i:s'),
    		// 	'updated_at' =>date('Y-m-d H:i:s')
    		// ]
    	]);
    	
    	
    	
    }
}
