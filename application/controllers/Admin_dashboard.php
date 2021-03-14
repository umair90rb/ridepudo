<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_dashboard extends CI_Controller {

	public function index()
	{
		if(isset($this->session->userdata['sessiondata']['user_id'])  && ($this->session->userdata['sessiondata']['user_type'] == 1))
        {
        	$user = $this->session->userdata['sessiondata'];
        	
        	$this->load->model('admin_model');
    		$info = $this->admin_model->get_dashboard_info();

			$data = array('module' => 'admin-dashboard-view',
						  'user' => $user,
						  'info' => $info
						 );

			$this->load->view('admin-page-view',$data);
		} else {
			redirect('login/logout');
		}
	}
}
