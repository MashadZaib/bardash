<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $fillable = [
		'name',
		'dob',
		'email',
		'password',
		'phone',
		'state',
		'zip_code',
		'profile_status',
		'fk_resume_id',
	];
}
