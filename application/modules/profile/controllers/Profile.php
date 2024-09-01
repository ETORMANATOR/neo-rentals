<?php

(defined('BASEPATH')) or exit('No direct script access allowed');

class Profile extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('LoginModel');
    }

    public function index()
    {
        $pages = array(
            'title' => 'Neo-Rentals profile'
        );
        if($this->session->userdata('logged_in')){
            $this->load->view('profile');
        }else{
            redirect('/');
        }
    }
    
    
}