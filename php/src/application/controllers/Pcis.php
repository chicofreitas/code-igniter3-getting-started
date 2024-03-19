<?php

class Projects extends MY_Controller {
    protected $pci;

    public function __construct() {
        parent::__construct();
        $this->load->model('pci_model');
        $this->pci = $this->pci_model;
    }

    // * GET
    public function index() {
        $data['pcis'] = [];
        $this->view->render('pcis/index', $data);
    }

    // * GET
    public function show($id) {
        $data['pci'] = [];
        $this->view->render('pcis/show', $data);
    }

    // * GET
    public function create() {
        $this->view->render('pcis/create');
    }

    // * GET
    public function edit($id) {
        $data['pci'] = $this->pci->findOne($id);
        $this->view->render('pcis/edit');
    }

    // * POST
    public function save($data) {
        $data['pci'] = $this->pci->save($data);
    }

    // * PATCH
    public function update($id, $data) {
        $data['pci'] = $this->pci->save($id, $data);
    }

    // * DELETE
    public function delete($id) {
        $this->pci->delete();
    }
}