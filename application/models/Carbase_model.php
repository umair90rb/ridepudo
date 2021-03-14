<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Carbase_model extends CI_model
{
	function __construct() {
		parent::__construct();
	}//end of class

	function get_my_carbase($user_id){
		$this->db->select('s.carbase_id,carbase_name');
	    $this->db->from('related_carbase s');
	    $this->db->join('carbase c','c.carbase_id = s.carbase_id');
	    $this->db->where('s.user_id',$user_id);
	    $q = $this->db->get();

	    $carbase = $q->row_array();

	    return $carbase;
	}

	function get_dashboard_info($carbase_id){
		$this->db->select('user_type,u.user_id');
	    $this->db->from('users u');
	    $this->db->join('related_carbase c','c.user_id = u.user_id');
	    $this->db->where('c.carbase_id',$carbase_id);
	    $q = $this->db->get();

	    $user_data = $q->result_array();

	    $user = array('users'=> 0,'drivers'=> 0);
	    foreach ($user_data as $key => $value) {
	    	switch ($value['user_type']) {
	    		case 2:
	    			$user['users']++;
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

	function get_users($carbase_id){
		$this->db->select('u.*');
	    $this->db->from('users u');
	    $this->db->join('related_carbase c','c.user_id = u.user_id');
	    $this->db->where('c.carbase_id',$carbase_id);
	    $this->db->where('user_type',2);
	    $q = $this->db->get();

	    $user = $q->result_array();

	    return $user;
	}

	function get_driver($carbase_id){
		$this->db->select('u.*');
	    $this->db->from('users u');
	    $this->db->join('related_carbase c','u.user_id = c.user_id');
	    $this->db->where('c.carbase_id',$carbase_id);
	    $this->db->where('user_type',5);
	    $q = $this->db->get();

	    $user = $q->result_array();

	    return $user;
	}

	function create_user($user_data,$related_carbase_data){

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

	function get_rides(){
		return true;
	}

}// end of class