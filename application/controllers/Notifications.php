<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifications extends CI_Controller {

	public function index()
	{	
		if(isset($this->session->userdata['sessiondata']['user_id'])){

			$user = $this->session->userdata['sessiondata'];

			if ($this->session->userdata['sessiondata']['user_type'] == 4) {
				$footer_view = 'login-footer-view';
				$nav_view = 'stylist-nav-view';
			} else {
				$nav_view = 'customer-nav-view';
				$footer_view = 'footer-view';
			}

			$info = array();

			$data = array('module' => 'notifications-view',
					  	  'nav_view' => $nav_view,
						  'user' => $user,
						  'info' => $info
					 );

			$this->load->view('page-view',$data);


		} else {
			redirect('login/logout');
		}
	}
}
