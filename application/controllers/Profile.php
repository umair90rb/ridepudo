<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	function shop_profile($user_name){

		

			if(isset($this->session->userdata['sessiondata']['user_id'])){

				$user = $this->session->userdata['sessiondata'];

				if ($this->session->userdata['sessiondata']['user_type'] == 4) {
					$footer_view = 'login-footer-view';
					$nav_view = 'stylist-nav-view';
				} else {
					$nav_view = 'customer-nav-view';
					$footer_view = 'footer-view';
				}
			} else {
				$nav_view = 'nav-view';
				$user = array();
			}

			$this->load->model('profile_model');
    		$info = $this->profile_model->get_profile_info($user_name);

			$data = array(  'module' => 'profile-view',
						    'nav_view' => $nav_view,
							'user' => $user,
							'info' => $info
						 );
			// echo '<pre>';
			// print_r($data);
			// die;
			$this->load->view('page-view',$data);

	}

	function shop_profile_backup($user_name){
		
		if(isset($this->session->userdata['sessiondata']['user_id'])  && ($this->session->userdata['sessiondata']['user_type'] !== 4))
        {
        	redirect(base_url().'myshop');
		} else {

			if(isset($this->session->userdata['sessiondata']['user_id'])){

				$user = $this->session->userdata['sessiondata'];

				if ($this->session->userdata['sessiondata']['user_type'] == 4) {
					$footer_view = 'login-footer-view';
					$nav_view = 'stylist-nav-view';
				} else {
					$nav_view = 'customer-nav-view';
					$footer_view = 'footer-view';
				}
			} else {
				$nav_view = 'nav-view';
				$user = array();
			}

			$this->load->model('profile_model');
    		$info = $this->profile_model->get_profile_info($user_name);

    		//var_dump($info); exit;

			$data = array(  'module' => 'profile-view',
						    'nav_view' => $nav_view,
							'user' => $user,
							'info' => $info
						 );

			$this->load->view('page-view',$data);
		}

	}
}
