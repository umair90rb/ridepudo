<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_profile_model extends CI_model
{
	function __construct() {
		parent::__construct();
	}//end of class

	function upload_profile_image($data){

		$this->db->where('user_id', $data['user_id']);
		$result = $this->db->update('user_images', $data);

	    if ($result) {
	    	return true;
	    } else {
	    	return false;
	    }
	}

	function update_profile($user_id,$user_data){

	    $this->db->where('user_id', $user_id);
		$result = $this->db->update('users', $user_data);

	    if ($result) {
	    	return true;
	    } else {
	    	return false;
	    }
	}

}// end of class