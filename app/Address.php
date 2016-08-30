<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
	protected $fillable = [
		'address_one', 'address_two', 'zip', 'city', 'country'
	];
}
