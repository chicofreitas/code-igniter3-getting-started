<?php

class RestfulController extends CI_Controller {
    protected $view = '';

    public function __construct() {
        parent::__construct();
        $this->load->library('renderview');
        $this->view = $this->renderview;
    }

    private function getModel($model_name) {
        return ''
    }
}