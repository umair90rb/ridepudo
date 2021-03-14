<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stylist_schedule extends CI_Controller {

	public function index()
	{
		if(isset($this->session->userdata['sessiondata']['user_id'])  && ($this->session->userdata['sessiondata']['user_type'] == 4))
        {
        	$user = $this->session->userdata['sessiondata'];
        	
			$data = array('module' => 'stylist-schedule-view',
						  'nav_view' => 'stylist-nav-view',
						  'user' => $user
						 );

			$this->load->view('page-view',$data);
		} else {
			redirect('login/logout');
		}
	}
}
