<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
	protected $fillable = [
		'name',
		'type',
	];
}
