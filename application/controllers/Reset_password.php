<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reset_password extends CI_Controller {

    function index(){

        $get_data = $_GET;

        $token_code = $get_data['token_code'];

        $this->load->model('set_password_model');
        $result = $this->set_password_model->verify_token($get_data,$token_code);

        if ($result === true) {
            $data = array("user_id" => $get_data['id'], "email" => $get_data['user']);
            $this->load->view('set-password-view',$data);

        } else {
            redirect(base_url());
        }
    }
}