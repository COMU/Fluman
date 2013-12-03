<?php


class FlumeConfig extends Eloquent {

	protected $table = 'flumeconfig';
	public $name;
	public $path;
	public $isCrisCreated;
	public static $timestamps = true;

}
