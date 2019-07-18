<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pakar extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->model('M_data');
		if($this->session->userdata('status') != "pakar"){
			redirect(base_url("Login"));
		}
	}

	function show_profil(){
		$this->load->view('Admin/v_profil',$data);
	}

	function pakar(){
		$data['Title']="Dashboard";
		$data['profil'] = $this->M_data->show_profil()->result();
		$data['content'] = 'v_halaman_utama_pakar';
		$this->load->view('Admin/partial/v_index',$data);
	}
}
