<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landingpage extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index() {
		if ($this->session->userdata('logged_in')) {
			if ($this->session->userdata('level') == $level1['admin']) {
				redirect('Admin', 'refresh');
			} elseif($this->session->userdata('level') == $level2['user']) {
				redirect('User', 'refresh');
			} else {
				$this->load->view('Landingpage/index');
			}
		} else {
			$this->load->view('Landingpage/index');
		}
	}
}
