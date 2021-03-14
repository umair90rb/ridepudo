<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myshop extends CI_Controller {

	public function index() {
		if(isset($this->session->userdata['sessiondata']['user_id'])  && ($this->session->userdata['sessiondata']['user_type'] == 4)) {
        	$user = $this->session->userdata['sessiondata'];
        	$this->load->model('myshop_model');
    		$info = $this->myshop_model->get_profile_info($user['user_id']);

			$data = array('module' => 'myshop-view',
						  'nav_view' => 'stylist-nav-view',
						  'user' => $user,
						  'info' => $info
						 );

			$this->load->view('page-view',$data);
		} else {
			redirect('login/logout');
		}
	}
}
