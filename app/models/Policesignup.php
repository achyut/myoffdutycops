<?php

class Policesignup extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'fname' => 'required',
		'lname' => 'required',
		'email' => 'required',
		//'phone' => 'required',
		'badgenumber' => 'required',
		'policeagency' => 'required',
		'state' => 'required',
		'authorization' => 'required'
	);
}
