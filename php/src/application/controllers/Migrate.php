<?php

class Migrate extends CI_Controller {
    public function index() {
        $this->load->library('migration');
        if ($this->migration->current() === FALSE) {
            show_error($this->migration->error_string());
        }
    }

    public function rollback($version = 0) {
        $this->load->library('migration');
        if ($this->migration->version($version) === FALSE) {
            show_error($this->migration->error_string());
        }
    }
}