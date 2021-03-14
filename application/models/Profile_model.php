<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_model
{
	function __construct() {
		parent::__construct();
	}//end of class
	
	function get_profile_info($username)
	{
		$this->db->select('u.*,s.*,a.*,i.file_name');
	    $this->db->from('users u');
	    $this->db->join('user_images i','u.user_id = i.user_id');
	    $this->db->join('shop s','u.user_id = s.user_id', 'left');
        $this->db->join('address a','s.address_id = a.id', 'left');
		$this->db->where('u.username',$username);
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

}// end of class