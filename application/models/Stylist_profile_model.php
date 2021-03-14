<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Stylist_profile_model extends CI_model
{
	function __construct() {
		parent::__construct();
	}//end of class
	
	function get_profile_info($user_id)
	{
		$this->db->select('s.*,a.*');
	    $this->db->from('shop s');
        $this->db->join('address a','s.address_id = a.id', 'left');
		$this->db->where('s.user_id',$user_id);
	    $q = $this->db->get();

      	if ($q->num_rows() > 0)
      	{
      		$data = $q->row_array();

      		$this->db->select('*');
	    	$this->db->from('images');
			$this->db->where('related_id',$data['shop_id']);
			$this->db->where('type','shop');
	    	$q1 = $this->db->get();

	    	$data['images'] = $q1->result_array();

	    	$this->db->select('*');
	    	$this->db->from('services');
			$this->db->where('shop_id',$data['shop_id']);
	    	$q2 = $this->db->get();

	    	$data['services'] = $q2->result_array();

        	return $data;
      	}//end of if 
      	else
      	{
      		return array();
     	}//end of else
	} // end of function get_profile_info

	function upload_profile_image($data){

		$this->db->where('user_id', $data['user_id']);
		$result = $this->db->update('user_images', $data);

	    if ($result) {
	    	return true;
	    } else {
	    	return false;
	    }
	}

	function update_profile($user_id,$user_data,$shop_data,$add_data){

	    $this->db->where('user_id', $user_id);
		$result = $this->db->update('users', $user_data);

		$result1 = $this->db->insert('address', $add_data);
		$address_id = $this->db->insert_id();

		$shop_data['address_id'] = $address_id;
		$this->db->where('user_id', $user_id);
		$result = $this->db->update('shop', $shop_data);

	    if ($result) {
	    	return true;
	    } else {
	    	return false;
	    }
	}

	function upload_shop_image($data){

		$result = $this->db->insert('images', $data);

	    if ($result) {
	    	return true;
	    } else {
	    	return false;
	    }

	}

	function delete_image($id){
		$this->db->where('id', $id);
		$result = $this->db->delete('images');

	    if ($result) {
	    	return true;
	    } else {
	    	return false;
	    }
	}

	function add_service($data){
		$result = $this->db->insert('services', $data);
		return $result;
	}

	function update_service($data){
		$this->db->where('id', $data['id']);
		$this->db->update('services', $data);
		$result =  $this->db->affected_rows();
		return $result;
	}

	function delete_service($id){
		$this->db->where('id', $id);
		$result = $this->db->delete('services');
		return $result;
	}

}// end of class