<?php

class Register extends CI_Controller
{
    public function index()
    {
        $this->load->view('auth/register');
    }
}