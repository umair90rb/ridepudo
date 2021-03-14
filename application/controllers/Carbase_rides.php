<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carbase_rides extends CI_Controller {

	public function index()
	{
		if(isset($this->session->userdata['sessiondata']['user_id'])  && ($this->session->userdata['sessiondata']['user_type'] == 2))
        {
        	$user = $this->session->userdata['sessiondata'];
        	
        	$this->load->model('carbase_model');
    		$info = $this->carbase_model->get_rides();

			$data = array('module' => 'carbase-rides-view',
						  'user' => $user,
						  'info' => $info
						 );

			$this->load->view('carbase-page-view',$data);
		} else {
			redirect('login/logout');
		}
	}
}
