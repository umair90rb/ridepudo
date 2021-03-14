<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stylist_profile extends CI_Controller {

	public function index()
	{
		if(isset($this->session->userdata['sessiondata']['user_id'])  && ($this->session->userdata['sessiondata']['user_type'] == 4))
        {
        	$user = $this->session->userdata['sessiondata'];

        	$this->load->model('stylist_profile_model');

    		$info = $this->stylist_profile_model->get_profile_info($user['user_id']);

    		//var_dump($user); exit;

			$data = array('module' => 'stylist-profile-view',
						  'nav_view' => 'stylist-nav-view',
						  'user' => $user,
						  'info' => $info
						 );

			$this->load->view('page-view',$data);
		} else {
			redirect('login/logout');
		}
	}

	function upload_profile_image(){

    $current_file_name = $this->input->post('current_file_name');

		$current_file = $this->input->post('current_file');

    if(!empty($current_file_name))  
		unlink($current_file);

		$this->load->model('stylist_profile_model');

		$user_id = $this->session->userdata['sessiondata']['user_id'];

		$this->load->library('custom_u_id');
		
        $new_name = $this->custom_u_id->construct_id('IMG');
        $path = 'rp_assets/Images/user_images/';

         if (!file_exists($path)) 
         {
               mkdir($path, 0755, true);
         }

        $config['upload_path']   = $path; 
        $config['allowed_types'] = 'jpg|png|jpeg'; 
        $config['file_name'] = $new_name; 

        $this->load->library('upload', $config);
			
        if( ! $this->upload->do_upload('profile_image')) {

            $data = array('msg' => $this->upload->display_errors(),
                          'code' => 0);

            $this->session->set_flashdata('error', $data);
            redirect(base_url().'stylist_profile');                
        } else {

            $image_details = $this->upload->data();

           	$images_data = array(
                                'user_id' => $user_id,
                                'file_name' => $image_details['file_name'],
                                );

            $result = $this->stylist_profile_model->upload_profile_image($images_data);
                   
            if(!$result){
               $data = array('error' => $this->upload->display_errors(),
                           'code' => 0);
               $this->session->set_flashdata('error', $data);
                redirect(base_url().'stylist_profile');
            }else{
               $this->session->userdata['sessiondata']['file_name'] = $image_details['file_name'];

               $data = array('success' => 'Profile Pic successfully uploaded !','code' => 1);
               $this->session->set_flashdata('success', $data);
               redirect(base_url().'stylist_profile');
            }
        }// else of if do upload
	}

	function update_profile(){
		$input = urldecode(file_get_contents('php://input'));
        $received = json_decode($input,true);

        $data = array();
        foreach ($received as $key => $value) {
            $data[$value['name']]= $value['value'];
        }

        //var_dump($data); exit;

        $phone = $data['phone1'].$data['phone2'].$data['phone3'];

        $user_id = $this->session->userdata['sessiondata']['user_id'];
        
        $user_data = array(
                    'first_name' => $data['first_name'],
                    'last_name' => $data['last_name'],
                    'email'   => $data['email'],
                    'phone' => $phone
                );

        $shop_data = array(
                    'shop_name' => $data['shop_name'],
                    'details' => $data['details'],
                    'term_and_cond' => $data['book_term_cond']
                );

        $add_data = array(
                    'street' => $data['street'],
                    'city' => $data['city'],
                    'state' => $data['state'],
                    'zip' => $data['zip']
                );

        $this->load->model('stylist_profile_model');

        $result = $this->stylist_profile_model->update_profile($user_id,$user_data,$shop_data,$add_data);

        $resp = $result;
                $this->output
                ->set_status_header(200)
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode($resp, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                ->_display();
                exit;
	}// end of function

	function upload_image(){

		$shop_id = $this->input->post('shop_id');

		$this->load->model('stylist_profile_model');

		$user_id = $this->session->userdata['sessiondata']['user_id'];

		$this->load->library('custom_u_id');
		
        $new_name = $this->custom_u_id->construct_id('IMG');
        $path = 'rp_assets/Images/shop_images/'.$user_id;

         if (!file_exists($path)) 
         {
               mkdir($path, 0755, true);
         }

        $config['upload_path']   = $path; 
        $config['allowed_types'] = 'jpg|png|jpeg'; 
        $config['file_name'] = $new_name; 

        $this->load->library('upload', $config);
			
        if( ! $this->upload->do_upload('profile_image')) {

            $data = array('msg' => $this->upload->display_errors(),
                          'code' => 0);

            $this->session->set_flashdata('error', $data);
            redirect(base_url().'stylist_profile');                
        } else {

            $image_details = $this->upload->data();

           	$images_data = array(
                                'related_id' => $shop_id,
                                'type' => 'shop',
                                'path' => $path,
                                'file_name' => $image_details['file_name'],
                                );

            $result = $this->stylist_profile_model->upload_shop_image($images_data);
                   
            if(!$result){
               $data = array('error' => $this->upload->display_errors(),
                           'code' => 0);
               $this->session->set_flashdata('error', $data);
                redirect(base_url().'stylist_profile');
            }else{

               $data = array('success' => 'Profile Pic successfully uploaded !','code' => 1);
               $this->session->set_flashdata('success', $data);
               redirect(base_url().'stylist_profile');
            }
        }// else of if do upload
	}

	function delete_image(){

		$input = urldecode(file_get_contents('php://input'));
        $id = json_decode($input,true);        

        $this->load->model('stylist_profile_model');
        $data = $this->stylist_profile_model->delete_image($id);
       
        $resp = $data;
        $this->output
        ->set_status_header(200)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($resp, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
        exit;
	}

	function save_service_info(){

      $input = urldecode(file_get_contents('php://input'));
      $received = json_decode($input,true);

      $data = array();
      foreach($received['form_data'] as $value)
      {
          $data[$value['name']] = $value['value'];    
      }

      $action = $received['action'];
      $user_id = $this->session->userdata['sessiondata']['user_id'];

      $this->load->model('stylist_profile_model');

      if ($action == 'add_service') {
        $result = $this->stylist_profile_model->add_service($data);
      } else if ($action == 'update_service') {
        $result = $this->stylist_profile_model->update_service($data);
      } else if ($action == 'delete_service') {
      $result = $this->stylist_profile_model->delete_service($data['id']);
      } 

      $resp = true;
      $this->output
          ->set_status_header(200)
          ->set_content_type('application/json', 'utf-8')
          ->set_output(json_encode($resp, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
          ->_display();
      exit; 

  }// end of function

}
