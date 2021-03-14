<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_model
{
	function __construct() {
		parent::__construct();
	}//end of class
	
	function verify_user($data)
	{
		$this->db->select('u.*,i.file_name');
	    $this->db->from('users u');
        $this->db->join('user_images i','u.user_id = i.user_id');
		$this->db->where('email',$data['email']);
	    $this->db->where('password', md5($data['password']));
	    $q = $this->db->get();

      	if ($q->num_rows() > 0)
      	{
      		$user_data = $q->row_array();
        	return $user_data;
      	}//end of if 
      	else
      	{
      		return false;
     	}//end of else
	} // end of function verify_user

	function reset_check_email($email,$token)
	{
		$this->db->select('*');
		$this->db->where('email', $email);
		$query1 = $this->db->get('users');
		
		//$data = array()
		if($query1->num_rows()>0 )
		{
			$user_data = $query1->row_array();
			$data = array('token' => $token);

			$this->db->where('user_id', $user_data['user_id']);
			$this->db->where('email', $email);
			$result = $this->db->update('users', $data);
			
			return $user_data;
		}
		else
		{
			return false;
		}//end of else
	}//end of check_user

	function add_subscriber($email)
	{
		$this->load->library('mailchimp_email');

		$list_id = '883c624760';

        $client = new MailchimpMarketing\ApiClient();
        $client->setConfig([
            'apiKey' => '3f30c878120a597cfd6c7d0a222933fd',
            'server' => 'us2',
        ]);

        $member = [
            'email_address' => $email,
            'email_type'=> 'html',
            'status' => 'subscribed'
        ];

        try {
            $response = $client->lists->addListMember($list_id,$member);
            // print_r($response);
            // return $response;
            
			$data_user = array('email' => $email);
			$result = $this->db->insert('subscriber', $data_user);

            $response = true;
        } catch (Error $e) {
            echo 'Error: ', $e->getMessage(), "\n";
         	$response = true;   
        }
        return $response;
	}

}// end of class