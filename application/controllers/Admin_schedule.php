<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_schedule extends CI_Controller {

	public function index()
	{
		if(isset($this->session->userdata['sessiondata']['user_id'])  && ($this->session->userdata['sessiondata']['user_type'] == 1))
        {
        	$user = $this->session->userdata['sessiondata'];
        	
        	$this->load->model('admin_model');
    		$info = $this->admin_model->get_schedules();

			$data = array('module' => 'admin-schedule-view',
						  'user' => $user,
						  'info' => $info
						 );

			$this->load->view('admin-page-view',$data);
		} else {
			redirect('login/logout');
		}
	}
}
