<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Driver_schedule extends CI_Controller {

	public function index()
	{
		if(isset($this->session->userdata['sessiondata']['user_id'])  && ($this->session->userdata['sessiondata']['user_type'] == 5))
        {
        	$user = $this->session->userdata['sessiondata'];
        	
			$data = array('module' => 'driver-schedule-view',
						  'nav_view' => 'driver-nav-view',
						  'user' => $user
						 );

			$this->load->view('page-view',$data);
		} else {
			redirect('login/logout');
		}
	}
}