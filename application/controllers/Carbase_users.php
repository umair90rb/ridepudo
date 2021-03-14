<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carbase_users extends CI_Controller {

	public function index()
	{
		if(isset($this->session->userdata['sessiondata']['user_id'])  && ($this->session->userdata['sessiondata']['user_type'] == 2))
        {
        	$user = $this->session->userdata['sessiondata'];
        	
        	$this->load->model('carbase_model');
        	$carbase = $this->carbase_model->get_my_carbase($user['user_id']);
    		$info = $this->carbase_model->get_users($carbase['carbase_id']);

			$data = array('module' => 'carbase-users-view',
						  'user' => $user,
						  'carbase_id' => $carbase['carbase_id'],
						  'info' => $info
						 );

			$this->load->view('carbase-page-view',$data);
		} else {
			redirect('login/logout');
		}
	}
}