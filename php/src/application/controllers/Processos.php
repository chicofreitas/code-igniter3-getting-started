<?php

class Processos extends MY_Controller {
    public function __construct() {
        parent::__construct();
        //$this->load->model('user_model');
        //$this->user = $this->user_model;
    }
    // * GET
    public function index() {
        $data['processos'] = [];
        // ? Would you like to change the default layout? See: application/libraries/Renderview.php
        $this->view->render('processos/index', $data, 'Processos Cadastrados');
    }
}