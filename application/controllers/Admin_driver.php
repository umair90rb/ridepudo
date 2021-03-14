<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_driver extends CI_Controller {

	public function index()
	{
		if(isset($this->session->userdata['sessiondata']['user_id'])  && ($this->session->userdata['sessiondata']['user_type'] == 1 ))
        {
        	$user = $this->session->userdata['sessiondata'];
        	
        	$this->load->model('admin_model');
    		$info = $this->admin_model->get_driver();
            $carbase = $this->admin_model->get_carbase();

			$data = array('module' => 'admin-driver-view',
						  'user' => $user,
						  'carbase' => $carbase,
                          'info' => $info
						 );

			$this->load->view('admin-page-view',$data);
		} else {
			redirect('login/logout');
		}
	}

	function create_user(){
		$this->load->library('custom_u_id');
        $this->load->library('mailchimp_email');

		$input = urldecode(file_get_contents('php://input'));
        $received = json_decode($input,true);

        $data = array();
        foreach ($received as $key => $value) {
            $data[$value['name']]= $value['value'];
        }

        $user_id = $this->custom_u_id->construct_id('USR');

        $username = $this->getusername(strtolower($data['first_name']).strtolower($data['last_name']),0);
        $token = $this->uniq_hash();
        
        $user_data = array(
                    'user_id' => $user_id,
                    'first_name' => $data['first_name'],
                    'last_name' => $data['last_name'],
                    'email'   => $data['email'],
                    'username'   => $username,
                    'phone' => $data['phone'],
                    'user_type'=> $data['user_type'],
                    'token' => $token,
                    'is_active'=> 1,
                    'member_since' => date('Y-m-d')
                );

        $carbase_data = array(
                    'carbase_id' => $data['carbase_id'],
                    'user_id'   => $user_id
                );

        $this->load->model('admin_model');

        $result = $this->admin_model->create_driver($user_data,$carbase_data);

        if ($result) {
        	$mail = $this->mailchimp_email->send_set_password_mail($user_data);
        }
        
        $resp = $result;
            $this->output
            ->set_status_header(200)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($resp, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
            ->_display();
            exit;
	}

	public function uniq_hash(){
        $uniqid=   strtoupper(md5(uniqid(rand(10000,99999))));
        $date = date("ymds");
        $microtime = floatval(substr((string)microtime(), 1, 8));
        $mili = substr($microtime, 2,3);
        return $date.$uniqid.$mili;
    }

	function getusername($username,$sno){

        $this->load->model('signup_model');
        $result = $this->signup_model->check_username($username);

        if (!empty($result)) {
            $new_username = $username.($sno + 1);
            return $this->getusername($new_username, $sno + 1);
        }
        return $username;
    }
}
