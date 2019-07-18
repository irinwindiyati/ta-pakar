<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_login');
		$this->load->helper('url');
		$this->load->library('session');
		// $this->load->model('M_data');
	}

	public function index() {
		if ($this->session->userdata('logged_in')) {
			if ($this->session->userdata('level') == $level1['admin']) {
				redirect('Admin', 'refresh');
			} elseif($this->session->userdata('level') == $level2['user']) {
				redirect('User', 'refresh');
			} else {
				$this->load->view('v_login');
			}
		} else {
			$this->load->view('v_login');
		}
	}

	public function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$level1 = "admin";
		$level2 = "user";
		

		if($where = array(
			'nama' => $username,
			'password' => $password,
			'level' => $level1
		)){

			$cek = $this->M_login->cek_login("tb_user",$where)->num_rows();


			if($cek > 0){
				$data_session = array(
					'nama' => $username,
					'password' => $password,
					'status' => "admin"
				);

				$this->session->set_userdata($data_session);
				redirect(base_url("Admin/index"));
			}
		}

		if($where = array(
			'nama' => $username,
			'password' => $password,
			'level' => $level2
		)){

			$cek = $this->M_login->cek_login("tb_user",$where)->num_rows();
			if($cek > 0){
				$data_session = array(
					'nama' => $username,
					'password' => $password,
					'status' => "user", 
				);
				$this->session->set_userdata($data_session);
				redirect(base_url("User/user"));
			}
		} else{
			echo "Username dan password salah !";
		}
	}

	// public function cek_level(){
	// 	$data['data_'] = $this->m_data->lihat_data()->result();
	// 	$this->load->view('v_tampil',$data);
	// }

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('Login'));
	}
}
