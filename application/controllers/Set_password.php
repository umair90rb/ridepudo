<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Set_password extends CI_Controller {

    function index(){

        $get_data = $_GET;

        //var_dump($get_data); exit;

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

    function create_password(){

        $input = urldecode(file_get_contents('php://input'));
        $data = json_decode($input,true);
        //var_dump($data); exit;
        $user_info = array();
        foreach ($data as $key => $value) {
            $user_info[$value['name']]= $value['value'];
        }

        $this->load->model('set_password_model');
        $result = $this->set_password_model->set_new_password($user_info);

        $resp = $result;
        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($resp, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
            ->_display();
        exit;
    }
}