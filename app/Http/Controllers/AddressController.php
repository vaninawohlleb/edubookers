<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Address;
use Validator;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Collection;


class AddressController extends Controller
{
	public function getAll()
	{
		return Address::all();
	}

	// public function validator(array $data){
	// 	return Validator::make($data[
	// 		'address_one' => 'required|max:255',
	// 		'address_two' => 'max:255',
	// 		'zip' => 'required|max:50',
	// 		'city' => 'required|max:50',
	// 		'country' => 'required|max:50'
	// 	]);
	// }

	public function create(array $data){
		return Address::create([
			'address_one' => $data['address_one'],
			'address_two' => $data['address_two'],
			'zip' => $data['zip'],
			'city' => $data['city'],
			'country' => $data['country']
		]);
	}
}
