<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
	/**
	 * @param array $attributes
	 * @return static
	 */
    public static function open(array $attributes)
	{
		return new static($attributes); //new Notice(Array)
	}
}
