<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_model
{
	function __construct() {
		parent::__construct();
	}//end of class
	
	function get_business($str)
	{
		$this->db->select('u.*,s.*,a.*');
		// $this->db->select('u.*, DISTINCT(s.shop_id) as shopid,a.*,ss.*');
		$this->db->from('shop s');
		$this->db->join('users u','u.user_id = s.user_id');
		$this->db->join('address a','s.address_id = a.id', 'left');
		$this->db->join('services ss','s.shop_id = ss.shop_id', 'left');
		$this->db->like('s.shop_name', $str);
		
		$this->db->or_where("a.city like '%".$str."%'",NULL, FALSE);
		$this->db->or_where("a.street like '%".$str."%'",NULL, FALSE);
		$this->db->or_where("a.state like '%".$str."%'",NULL, FALSE);
		$this->db->or_where("ss.service_name like '%".$str."%'",NULL, FALSE);
		$this->db->distinct();
		
		$query = $this->db->get();

		if ($query->num_rows() > 0)
      	{
      		$cehck_array_list = array();

      		$shops = $query->result_array();
      		
      		foreach ($shops as $key => $value) {
      			// echo $value['username'];
      			if (!empty($value['username']) && !empty($value['shop_name']) && !empty($value['street']) && !empty($value['city']) && !empty($value['state']) ) {

      				$this->db->where('shop_id', $value['shop_id']);
      				$serviceCount = $this->db->count_all('services');
      				if ($serviceCount > 0) {
      					$cehck_array_list[$key] = $value;
      				}
      			}
      		}
        	return $cehck_array_list;
      	}
      	else
      	{
      		return array();
     	}//end of else
	} // end of function verify_user

	function get_business_backup($str)
	{
		// I need to use also search services
		$this->db->select('s.*');
		$this->db->from('shop s');
		// $this->db->join('users u','u.user_id = s.user_id');
		// $this->db->like('shop_name', $str);
		$query = $this->db->get();

		if ($query->num_rows() > 0)
      	{
      		$shops = $query->result_array();
        	return $shops;
      	}//end of if 
      	else
      	{
      		return array();
     	}//end of else
	} // end of function verify_user

}// end of class