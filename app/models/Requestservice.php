<?php

class Requestservice extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'fullname' => 'required',
		'company' => 'required',
		'email' => 'required',
		//'phone' => 'required',
		'location' => 'required',
		'dateandtime' => 'required',
		//'request_message' => 'required'
	);
}
