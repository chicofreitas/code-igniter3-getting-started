<?php

class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view('auth/login');
    }
}