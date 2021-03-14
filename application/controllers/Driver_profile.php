<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class driver_profile extends CI_Controller {

	public function index(){

		if(isset($this->session->userdata['sessiondata']['user_id'])  && ($this->session->userdata['sessiondata']['user_type'] == 5))
		{
			$user = $this->session->userdata['sessiondata'];

			$data = array('module' => 'driver-profile-view',
						  'nav_view' => 'driver-nav-view',
						  'user' => $user
						 );

			$this->load->view('page-view',$data);
		} else {
			redirect('login/logout');
		}
	}

	function upload_profile_image(){

		$current_file = $this->input->post('current_file');

		unlink($current_file);

		$this->load->model('driver_profile_model');

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
            redirect(base_url().'driver_profile');                
        } else {

            $image_details = $this->upload->data();

           	$images_data = array(
                                'user_id' => $user_id,
                                'file_name' => $image_details['file_name'],
                                );

            $result = $this->driver_profile_model->upload_profile_image($images_data);
                   
            if(!$result){
               $data = array('error' => $this->upload->display_errors(),
                           'code' => 0);
               $this->session->set_flashdata('error', $data);
                redirect(base_url().'driver_profile');
            }else{
               $this->session->userdata['sessiondata']['file_name'] = $image_details['file_name'];

               $data = array('success' => 'Profile Pic successfully uploaded !','code' => 1);
               $this->session->set_flashdata('success', $data);
               redirect(base_url().'driver_profile');
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

        $this->load->model('driver_profile_model');

        $result = $this->driver_profile_model->update_profile($user_id,$user_data);

        $resp = $result;
                $this->output
                ->set_status_header(200)
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode($resp, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                ->_display();
                exit;
	}// end of function
}
