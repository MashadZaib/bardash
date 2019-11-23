<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $fillable = [
		'business_name',
		'owner_name',
		'email',
		'phone_number',
		'address',
		'owner_photo_url',
		'business_logo_url',
		'profile_status',
		'fk_business_type_id',
	];
}
