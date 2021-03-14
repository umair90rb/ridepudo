<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{	
		if(isset($this->session->userdata['sessiondata']['user_id'])){

			$user = $this->session->userdata['sessiondata'];

			if ($this->session->userdata['sessiondata']['user_type'] == 4) {
				$footer_view = 'login-footer-view';
				$nav_view = 'stylist-nav-view';
			} else if ($this->session->userdata['sessiondata']['user_type'] == 5) {
				$footer_view = 'login-footer-view';
				$nav_view = 'driver-nav-view';
			} else {
				$nav_view = 'customer-nav-view';
				$footer_view = 'footer-view';
			}
		} else {
			$nav_view = 'nav-view';
			$user = array();
		}

		$data = array(  'module' => 'home-view',
					    'nav_view' => $nav_view,
						'user' => $user
					 );

		$this->load->view('page-view',$data);
	}

	function get_business(){

		$input = urldecode(file_get_contents('php://input'));
        $str = json_decode($input,true);
        
    	$this->load->model('home_model');
    	$shops = $this->home_model->get_business($str);

        $resp = $shops;
        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($resp, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
            ->_display();
        exit;  
	}
}

/*
1 - Admin
2 - Carbase
3 - Customer
4 - Stylist
5 - Driver
*/
