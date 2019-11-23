<?php

use App\Model\Candidate;
use App\Model\Employer;
use App\Model\Order;

	

	if ( ! function_exists('get_employer_name')) {
		function get_employer_name($id) {
			$owner_name = Employer::where('id',$id)->pluck('owner_name')->first();
			return $owner_name;
		}
	}
	if ( ! function_exists('get_candidate_name')) {
		function get_candidate_name($id) {
			$name = Candidate::where('id',$id)->pluck('name')->first();
			return $name;
		}
	}
