<?php

class Users extends MY_Controller {
    protected $user;

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->user = $this->user_model;
    }

    // * GET
    public function index() {
        $data['users'] = $this->user->get();
        $this->view->render('users/index', $data);
    }

    // * GET
    public function show($id) {
        $user = $this->user->findOne($id);
        $data['user'] = $user[0];
        $this->view->render('users/show', $data);
    }

    // * GET
    public function create() {
        $this->view->render('users/create');
    }

    // * GET
    public function edit($id) {
        $data['user'] = $this->user->findOne($id);
        $this->view->render('users/edit');
    }

    // * POST
    public function save($data) {
        $data['user'] = $this->user->save($data);
    }

    // * PATCH
    public function update($id, $data) {
        $data['user'] = $this->user->save($id, $data);
    }

    // * DELETE
    public function delete($id) {
        $this->user->delete();
    }
}