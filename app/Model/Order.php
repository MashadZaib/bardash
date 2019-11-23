<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
		'order_status',
		'fk_shift_summary',
		'fk_pay_summary',
		'fk_candidate_id',
		'fk_employer_id',
	];
}
