<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('addresses')->insert([
    		'address_one' => str_random(10),
    		'address_two' => str_random(10),
    		'zip' => str_random(5),
    		'city' => str_random(7),
    		'country' => str_random(13)
    	]);
    }
}
