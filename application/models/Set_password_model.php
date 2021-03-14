<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Set_password_model extends CI_model
{
	function __construct() {
		parent::__construct();
	}//end of class

	function verify_token($get_data,$token_code){
		$this->db->select('token');
		$this->db->where('user_id', $get_data['id']);
		$this->db->where('email', $get_data['user']);
		$query1 = $this->db->get('users');
		
		//$data = array()
		if($query1->num_rows()>0 )
		{
			$user_data = $query1->row_array();
			if ($user_data['token'] === $token_code) {
				return true;
			} else {
				return false;
			}
		}
		else
		{
			return false;
		}//end of else

	}

	function set_new_password($user_info) {

		$data = array('token' => '', 'password' => md5($user_info['password']));

		$this->db->where('user_id', $user_info['user_id']);
		$this->db->where('email', $user_info['email']);
		$result = $this->db->update('users', $data);
		
		return $result;
	}
}