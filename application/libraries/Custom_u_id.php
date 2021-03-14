<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Custom_u_id{

	public function construct_id($prefix)
	{
		$uniqid=  substr( strtoupper(md5(uniqid(rand(10000,99999)))), 1, 6);
		$date = date("ymds");
		$microtime = floatval(substr((string)microtime(), 1, 8));
        $mili = substr($microtime, 2,3);
		return $prefix.$date.$uniqid.$mili;
	}
}
