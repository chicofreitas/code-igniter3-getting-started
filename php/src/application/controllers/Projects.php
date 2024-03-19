<?php

class Projects extends MY_Controller {
    protected $project;

    public function __construct() {
        parent::__construct();
        $this->load->model('project_model');
        $this->project = $this->project_model;
    }

    // * GET
    public function index() {
        $data['projects'] = [];
        $this->view->render('projects/index', $data);
    }

    // * GET
    public function show($id) {
        $data['project'] = [];
        $this->view->render('projects/show', $data);
    }

    // * GET
    public function create() {
        $this->view->render('projects/create');
    }

    // * GET
    public function edit($id) {
        $data['project'] = $this->project->findOne($id);
        $this->view->render('projects/edit');
    }

    // * POST
    public function save($data) {
        $data['project'] = $this->project->save($data);
    }

    // * PATCH
    public function update($id, $data) {
        $data['project'] = $this->project->save($id, $data);
    }

    // * DELETE
    public function delete($id) {
        $this->project->delete();
    }
}