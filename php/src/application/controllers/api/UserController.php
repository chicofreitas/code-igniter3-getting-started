<?php
// * \Application\Controllers\Api\UserController
class UserController extends CI_Controller {

    public function __contruct() {
        parent::contruct();
    }

    public function index() {
        $this->load->model('User_model');
        $users = $this->User_model->get();
        echo json_encode($users);
    }
}