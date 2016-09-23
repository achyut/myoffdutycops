<?php

class News extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'title' => 'required',
		'date' => 'required',
		'category' => 'required',
		'source' => 'required',
		'pic_link' => 'required',
		'shortdesc' => 'required',
		'longdesc' => 'required'
	);
}
