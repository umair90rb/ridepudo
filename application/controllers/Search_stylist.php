<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_stylist extends CI_Controller {

	public function index()
	{	

		if(isset($this->session->userdata['sessiondata']['user_id'])){

			$user = $this->session->userdata['sessiondata'];

			if ($this->session->userdata['sessiondata']['user_type'] == 4) {
				$footer_view = 'login-footer-view';
				$nav_view = 'stylist-nav-view';
			} else if ($this->session->userdata['sessiondata']['user_type'] == 2) {
				$nav_view = 'driver-nav-view';
				$footer_view = 'login-footer-view';
			} else {
				$nav_view = 'customer-nav-view';
				$footer_view = 'footer-view';
			}
		} else {
			$nav_view = 'nav-view';
			$user = array();
		}
		$data = array('module' => 'search-stylist-view',
					  'nav_view' => $nav_view,
						  'user' => $user
					 );

		$this->load->view('page-view',$data);
	}
}
