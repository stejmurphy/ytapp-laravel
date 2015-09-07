<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    /**
	 * No timestamps in the model
	 */

	public $timestamps = false;


	/**
	 * Fillable fields for the Provider
	 */

	protected $fillable = [

		'name',
		'copyright_email'

	];
}
