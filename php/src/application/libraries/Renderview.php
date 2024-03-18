<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Renderview {

	protected $header = '';
	protected $content = '';
	protected $footer = '';
	protected $ci;

	public function __construct() {
		$this->ci =& get_instance();
	}

	public function render($view, $data = [], $title = 'Dashboard')
	{
			$data['title'] = $title;
			$this->ci->load->view('header', $data);
			$this->ci->load->view($view, $data);
			$this->ci->load->view('footer');
	}
}