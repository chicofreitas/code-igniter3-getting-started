<?php

class LoginController extends CI_Controller {

    public function __contruct() {
        parent::contruct();
    }

    public function login() {
        $this->load->view('auth/login');
    }
}