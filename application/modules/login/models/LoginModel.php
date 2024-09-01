<?php


class LoginModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        // Load the database library
        // $this->load->database();
    }
    public function check_login($phone, $pass)
    {
         
        $ck = $this->db->get_where('users', array('phone' => $phone,'password' => $pass));
        return $ck->result();
    }
}