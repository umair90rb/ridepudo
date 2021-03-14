<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stylist_signup extends CI_Controller {

	public function index()
	{
		
		$data = array('module' => 'stylist-signup-view',
					  'nav_view' => 'nav-view'
					 );

		$this->load->view('page-view',$data);
	}
}
