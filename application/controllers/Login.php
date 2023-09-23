<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model(['Login_model']);
        $this->load->library('recaptcha');
    }

    public function index($response=false){
        $result['message'] = $response;
        $result['captcha']  = $this->recaptcha->getWidget();
        $result['script_captcha']   = $this->recaptcha->getScriptTag();
        $this->load->view('login_view', $result);
    }

    public function auth(){

        $recaptcha = $this->input->post('g-recaptcha-response');
        $response = $this->recaptcha->verifyResponse($recaptcha);
        
        if (isset($response['success']) and $response['success'] === true) {
            $username   = $this->input->post('username');
            $password   = $this->input->post('password');
            $result = $this->Login_model->login($username, $password);
            if(isset($result->error)){
                $response = $result->error;
                $this->index($response);
            }else{
                $this->load->view('login_success', $result);
            }
        }else{
            redirect(base_url());
        }

    }

}