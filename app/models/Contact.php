<?php

class Contact extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'fname' => 'required',
		'lname' => 'required',
		'email' => 'required',
		//'phone' => 'required',
		'contact_message' => 'required'
	);
}
