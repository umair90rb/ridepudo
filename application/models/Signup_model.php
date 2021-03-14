<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup_model extends CI_model
{
	function __construct() {
		parent::__construct();
	}//end of class

	function create_user($data_user){
		$user_id = $data_user['user_id'];

		$image_data = array('user_id' => $user_id);

		$result = $this->db->insert('users', $data_user);
		$result1 = $this->db->insert('user_images', $image_data);

		if ($data_user['user_type'] == 4) {
			$result2 = $this->db->insert('shop', $image_data);
		}

		if($result){
			
			$this->db->select('u.*,i.file_name');
		    $this->db->from('users u');
		    $this->db->join('user_images i','u.user_id = i.user_id');
			$this->db->where('u.user_id',$user_id);
		    $q = $this->db->get();

	      	if ($q->num_rows() > 0)
	      	{
	      		$user_data = $q->row_array();
	        	return $user_data;
			}else{
				return false;
			}
		}else{
			return false;
		}

	}// end of function register user

	function check_username($username){

		$this->db->select('username');
		$this->db->where('username', $username);
		$query1 = $this->db->get('users');
		
		if($query1->num_rows()>0 )
		{
			return true;
		}
		else
		{
			return false;
		}//end of else
	}

	function check_email($email)
	{
		$this->db->select('email');
		$this->db->where('email', $email);
		$query1 = $this->db->get('users');
		
		if($query1->num_rows()>0 )
		{
			$email = $query1->row()->email;
			return $email;
		}
		else
		{
			return false;
		}//end of else
	}//end of check_email

}// end of class