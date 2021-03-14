<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function user_login(){

		$input = urldecode(file_get_contents('php://input'));
        $received = json_decode($input,true);
	    $data = array();
    	foreach($received as $key => $value)
        {
        	$data[$value['name']]= $value['value'];
    	}
        
    	$this->load->model('login_model');

    	$user_details = $this->login_model->verify_user($data);

    	if (!empty($user_details))
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

			$result = $user_data;
        } else {
            $result = false;
        } // end of else

        $resp = $result;
        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($resp, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
            ->_display();
        exit;  
	}// end of function login

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'home');
	}// end of logout function

    function send_forgetpasword(){

        $this->load->library('mailchimp_email');

        $input = urldecode(file_get_contents('php://input'));
        $email = json_decode($input,true);

        $token = $this->uniq_hash();

        $this->load->model('login_model');
        $email_data = $this->login_model->reset_check_email($email,$token);

        if ($email_data == false) {
            $result = 'This email is not linked to any Account.';
        } else {
            $mail = $this->mailchimp_email->send_reset_password_email($email_data,$token);
            $result = 'Reset Password Link sent to your Email.';        
            // print_r($mail);
            // die;

            // if ($mail[0]->status == 'sent') {
            //     $result = 'Reset Password Link sent to your Email.';        
            // }else{
            //     $result = 'Error on Sending Email.';        
            // }
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

    function add_subscriber(){

        $this->load->library('mailchimp_email');

        $input = urldecode(file_get_contents('php://input'));
        $email = json_decode($input,true);
        

        $this->load->model('login_model');
        $email_data = $this->login_model->add_subscriber($email);
        // print_r($email_data);
        // die;

        //$mail = $this->mailchimp_email->add_subscriber($email);
        $mail = $this->mailchimp_email->send_subscribe_email($email);
        // print_r($mail);
        // die;

        $result = 'Thank you for subscribe.';        
        
        $resp = $result;
        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($resp, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
            ->_display();
        exit;  

    }

    public function email_verify($base_userid){
        $user_id =  base64_decode($base_userid);
        $column = [
            'email_verified'=>1
        ];
        $this->db->where('user_id',$user_id);
        $this->db->update('users',$column);
        redirect(base_url().'home');

    }

}
