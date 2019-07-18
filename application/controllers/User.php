<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		if($this->session->userdata('status') != "user"){
			redirect(base_url("Login"));
		}
	}

	function user()
	{
		$this->load->view('User/v_hal_utama_user');
	}

	function show_v_register()
	{
		$this->load->view('User/v_register');
	}
}
