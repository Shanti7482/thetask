<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller{
    function __construct()
    {
        parent::__construct(); 
    }

    public function loginPage()
    {
        $data['view']='auth/login_page';
        $this->load->view('home/main',$data);
    }
    public function signUpPage()
    {
        $data['view']='auth/signin_page';
        $this->load->view('home/main',$data);
    }
}

?>