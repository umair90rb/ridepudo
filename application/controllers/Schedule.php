<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends CI_Controller {

	public function index()
	{
		if(isset($this->session->userdata['sessiondata']['user_id'])  && ($this->session->userdata['sessiondata']['user_type'] == 3))
        {
        	$user = $this->session->userdata['sessiondata'];
        	
			$data = array('module' => 'schedule-view',
						  'nav_view' => 'customer-nav-view',
						  'user' => $user
						 );

			$this->load->view('page-view',$data);
		} else {
			redirect('login/logout');
		}
	}
}
