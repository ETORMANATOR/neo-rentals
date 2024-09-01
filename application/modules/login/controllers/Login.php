<?php

(defined('BASEPATH')) or exit('No direct script access allowed');

class Login extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel');
    }

    public function index()
    {
        $pages = array(
            'title' => 'Neo-Rentals Login'
        );
        if($this->session->userdata('logged_in')){
            redirect('/profile');
            // $this->load->view('profile/profile');
        }else{
         $this->load->view('login', $pages);
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/');

    }
    public function login_validate()
    {
        $phone = $this->input->post('phone', true);
        $pass = $this->input->post('password', true);
        
        if(count($this->LoginModel->check_login($phone, $pass)) > 0) {
            $data = array(
                'phone'  => $phone,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($data);
            $response = array("status" =>"200","message"=> "success");
        } else {
            $this->session->sess_destroy();
            $response = array("status" =>"404","message"=> "Account not found");
        }
        echo json_encode($response);
    }
}