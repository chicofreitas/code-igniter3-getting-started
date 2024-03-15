<?php 

class Roles extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('role_model');
    }

    // * GET
    public function index() {
        $data['roles'] = $this->role_model->get();
        $this->view->render('roles/index', $data);
    }

    // * GET
    public function show($id) {
        $role = $this->role_model->findOne($id);
        $data['role'] = $role[0];
        $this->view->render('roles/show', $data);
    }

    // * GET
    public function create() {
        $this->view->render('roles/create');
    }

    // * GET
    public function edit($id) {
        $data['role'] = $this->role_model->findOne($id);
        $this->view->render('roles/edit', $data);
    }

    // * POST
    public function save($data) {
        $data['role'] = $this->role_model->save($data);
    }

    // * PATCH
    public function update($id, $data) {
        $data['role'] = $this->role_model->save($id, $data);
    }

    // * DELETE
    public function delete($id) {
        $this->role_model->delete($id);
    }
}