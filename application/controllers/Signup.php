<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index()
	{

		$data = array('module' => 'signup-view',
					  'nav_view' => 'nav-view'
					 );

		$this->load->view('page-view',$data);
	}

	function create_user(){
        
		$this->load->library('custom_u_id');

		$input = urldecode(file_get_contents('php://input'));
        $received = json_decode($input,true);

        $data = array();
        foreach ($received as $key => $value) {
            $data[$value['name']]= $value['value'];
        }

        $phone = $data['phone1'].$data['phone2'].$data['phone3'];

        if ($data['signup_for'] == 'stylist') {
        	$user_type = 4;
        } else {
        	$user_type = 3;
        }

        $user_id = $this->custom_u_id->construct_id('USR');

        $username = $this->getusername(strtolower($data['first_name']).strtolower($data['last_name']),0);
        
        $user_data = array(
                    'user_id' => $user_id,
                    'first_name' => $data['first_name'],
                    'last_name' => $data['last_name'],
                    'email'   => $data['email'],
                    'username'   => $username,
                    'phone' => $phone,
                    'password' => md5($data['password']),
                    'user_type'=> $user_type,
                    'is_active'=> 1,
                    'member_since' => date('Y-m-d')
                );

        $this->load->model('signup_model');

        $user_details = $this->signup_model->create_user($user_data);

        $this->load->library('mailchimp_email');
        $email_data = $this->mailchimp_email->add_signup_user($user_details['email']);
        
        // VERIFICATION MAIL
        $resetlink =  base_url('user/email_verify').'/'.base64_encode($user_id);
        $mail = $this->mailchimp_email->send_email_verify($user_data,$resetlink);
            
        // print_r($email_data);
        // die;

        if($user_details)
        {
        	$user_data =  array(
				'user_id' => $user_details['user_id'],
				'last_name' => $user_details['last_name'],
				'first_name' => $user_details['first_name'],
                'username' => $user_details['username'],
				'email' => $user_details['email'],
                'phone' => $user_details['phone'],
				'is_active' => $user_details['is_active'],
				'user_type' => $user_details['user_type'],
                'member_since' => $user_details['member_since'],
                'file_name' => $user_details['file_name']

			);
            
            $this->session->set_userdata('sessiondata',$user_data);
        
            $resp = $user_data;
        }else{
            $resp = false;
        }
                $this->output
                ->set_status_header(200)
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode($resp, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                ->_display();
                exit;
	}// end of function register

    function getusername($username,$sno){

        $this->load->model('signup_model');
        $result = $this->signup_model->check_username($username);

        if (!empty($result)) {
            $new_username = $username.($sno + 1);
            return $this->getusername($new_username, $sno + 1);
        }
        return $username;
    }


	function check_email(){

        $input = urldecode(file_get_contents('php://input'));

        $this->load->model('signup_model');
        $user_email = $this->signup_model->check_email($input);

        $resp = $user_email;
        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($resp, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
            ->_display();
        exit;  
    }// end of function check email


    public function emailverifylink($userid){
        $this->load->library('mailchimp_email');

        $resetlink =  base_url('user/email_verify').'/'.base64_encode($userid);
        
        $this->db->where('user_id',$userid);
        $response = $this->db->get('users')->result_array();
        if (empty($response)) {
            return false;
        } else {
            $mail = $this->mailchimp_email->send_email_verify($response[0],$resetlink);
            $result = 'Reset Password Link sent to your Email.';
            return true;        
        }
        

        die;

    }
}
