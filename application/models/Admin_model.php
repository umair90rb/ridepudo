<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_model
{
	function __construct() {
		parent::__construct();
	}//end of class

	function get_dashboard_info(){
		$this->db->select('user_type,user_id');
	    $this->db->from('users');
	    $q = $this->db->get();

	    $user_data = $q->result_array();

	    $user = array('customers'=> 0,'stylist'=> 0,'drivers'=> 0);
	    foreach ($user_data as $key => $value) {
	    	switch ($value['user_type']) {
	    		case 3:
	    			$user['customers']++;
	    			break;
	    		case 4:
	    			$user['stylist']++;
	    			break;
	    		case 5:
	    			$user['drivers']++;
	    			break;
	    		
	    		default:
	    			break;
	    	}
	    }

	    return $user;
	}

	function get_cutomers(){
		$this->db->select('*');
	    $this->db->from('users');
	    $this->db->where('user_type',3);
	    $q = $this->db->get();

	    $user = $q->result_array();

	    return $user;
	}

	function create_user($data_user){
		$user_id = $data_user['user_id'];

		$image_data = array('user_id' => $user_id);

		$result = $this->db->insert('users', $data_user);
		$result1 = $this->db->insert('user_images', $image_data);

		if($result){
			return true;
		}else{
			return false;
		}

	}// end of function register user

	function get_stylists(){
		$this->db->select('u.*,shop_name');
	    $this->db->from('users u');
	    $this->db->join('shop s','u.user_id = s.user_id');
	    $this->db->where('user_type',4);
	    $q = $this->db->get();

	    $user = $q->result_array();

	    return $user;
	}

	function create_stylist($user_data,$shop_data){

		$user_id = $user_data['user_id'];

		$image_data = array('user_id' => $user_id);

		$result = $this->db->insert('users', $user_data);
		$result1 = $this->db->insert('user_images', $image_data);
		$result2 = $this->db->insert('shop', $shop_data);

		if($result){
			return true;
		}else{
			return false;
		}

	}

	function get_carbase(){
		$this->db->select('u.*,carbase_id,carbase_name');
	    $this->db->from('carbase c');
	    $this->db->join('users u','u.user_id = c.owner_id');
	    $q = $this->db->get();

	    $user = $q->result_array();

	    return $user;
	}

	function create_carbase($user_data,$carbase_data){

		$user_id = $user_data['user_id'];

		$image_data = array('user_id' => $user_id);
		$related_carbase_data = array('user_id' => $user_id,'carbase_id' => $carbase_data['carbase_id']);

		$result = $this->db->insert('users', $user_data);
		$result1 = $this->db->insert('user_images', $image_data);

		$result2 = $this->db->insert('carbase', $carbase_data);
		$result2 = $this->db->insert('related_carbase', $related_carbase_data);

		if($result){
			return true;
		}else{
			return false;
		}

	}

	function get_driver(){
		$this->db->select('u.*,carbase_name');
	    $this->db->from('users u');
	    $this->db->join('related_carbase s','u.user_id = s.user_id');
	    $this->db->join('carbase c','c.carbase_id = s.carbase_id');
	    $this->db->where('user_type',5);
	    $q = $this->db->get();

	    $user = $q->result_array();

	    return $user;
	}

	function create_driver($user_data,$related_carbase_data){

		$user_id = $user_data['user_id'];

		$image_data = array('user_id' => $user_id);

		$result = $this->db->insert('users', $user_data);
		$result1 = $this->db->insert('user_images', $image_data);

		$result2 = $this->db->insert('related_carbase', $related_carbase_data);

		if($result){
			return true;
		}else{
			return false;
		}

	}

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

	function get_schedules(){
		return true;
	}

}// end of class