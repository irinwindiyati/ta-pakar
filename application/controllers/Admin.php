<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->model('M_data');
		if($this->session->userdata('status') != "admin"){
			redirect(base_url("Login"));
		}
	}

	function show_profil(){
		$this->load->view('Admin/v_profil',$data);
	}

	function index(){
		$data['Title']="Dashboard";
		$data['profil'] = $this->M_data->show_profil()->result();
		$data['content'] = 'v_halaman_utama_admin';
		$this->load->view('Admin/partial/v_index',$data);
	}

	function show_v_penyakit(){
		$data['Title'] = "Penyakit";
		$data['profil'] = $this->M_data->show_profil()->result();
		$data['penyakit'] = $this->M_data->show_penyakit()->result();
		$data['content'] = 'v_data_penyakit';

		$this->load->view('Admin/partial/v_index',$data);
	}

	function tambah_data_penyakit(){
		$kd_penyakit = $this->input->post('kd_penyakit');
		$penyakit = $this->input->post('penyakit');
		$deskripsi = $this->input->post('deskripsi');

		$data = array(
			'kd_penyakit' => $kd_penyakit,
			'penyakit' => $penyakit,
			'deskripsi' => $deskripsi
			 );
		$this->M_data->input_data_penyakit($data);
		$this->show_v_penyakit();
	}

	function hapus_data_penyakit(){
		$kd_penyakit = $this->input->post('kd_penyakit');
		$where = array('kd_penyakit' => $kd_penyakit);
		$this->M_data->hapus_penyakit($where,'tb_penyakit');
		$this->show_v_penyakit();
	}

	function edit_data_penyakit($kd_penyakit){
		$data['Title'] = "Penyakit";
		$data['profil'] = $this->M_data->show_profil()->result();
		$data['penyakit'] = $this->M_data->get_where_penyakit($kd_penyakit)->result();
		$data['content']  = 'v_edit_penyakit';

		$this->load->view('Admin/partial/v_index',$data);
	}

	function update_data_penyakit(){
		$kd_penyakit = $this->input->post('kd_penyakit');
		$penyakit    = $this->input->post('penyakit');
		$deskripsi 	 = $this->input->post('deskripsi');

		$data = array(
			'penyakit' 	   => $penyakit,
			'deskripsi'    => $deskripsi
		);

		$this->M_data->update_penyakit($data,$kd_penyakit);
		$data['Title'] = "Penyakit";
		$data['profil'] = $this->M_data->show_profil()->result();
		$data['penyakit'] = $this->M_data->show_penyakit()->result();
		$data['content']  = 'v_data_penyakit';

		$this->load->view('Admin/partial/v_index',$data);
	}

	function show_v_gejala(){
		$data['Title'] = "gejala";
		$data['profil'] = $this->M_data->show_profil()->result();
		$data['gejala'] = $this->M_data->show_gejala()->result();
		$data['content'] = 'v_data_gejala';

		$this->load->view('Admin/partial/v_index',$data);
	}

	function tambah_data_gejala(){
		$kd_gejala = $this->input->post('kd_gejala');
		$gejala = $this->input->post('gejala');

		$data = array(
			'kd_gejala' => $kd_gejala,
			'gejala' => $gejala
			 );
		$this->M_data->input_data_gejala($data);
		$this->show_v_gejala();
	}

	function hapus_data_gejala(){
		$kd_gejala = $this->input->post('kd_gejala');
		$where = array('kd_gejala' => $kd_gejala);
		$this->M_data->hapus_gejala($where,'tb_gejala');
		$this->show_v_gejala();
	}

	function edit_data_gejala($kd_gejala){
		$data['Title'] = "gejala";
		$data['profil'] = $this->M_data->show_profil()->result();
		$data['gejala'] = $this->M_data->get_where_gejala($kd_gejala)->result();
		$data['content']  = 'v_edit_gejala';

		$this->load->view('Admin/partial/v_index',$data);
	}

	function update_data_gejala(){
		$kd_gejala = $this->input->post('kd_gejala');
		$gejala    = $this->input->post('gejala');
		
		$data = array(
			'gejala' 	   => $gejala
		);

		$this->M_data->update_gejala($data,$kd_gejala);
		$data['Title'] = "gejala";
		$data['profil'] = $this->M_data->show_profil()->result();
		$data['gejala'] = $this->M_data->show_gejala()->result();
		$data['content']  = 'v_data_gejala';

		$this->load->view('Admin/partial/v_index',$data);
	}


	function show_v_kendali(){
		$data['Title'] = "kendali";
		$data['profil'] = $this->M_data->show_profil()->result();
		$data['kendali'] = $this->M_data->show_kendali()->result();
		$data['content'] = 'v_data_pengendalian_penyakit';

		$this->load->view('Admin/partial/v_index',$data);
	}

	function tambah_data_kendali(){
		$kd_kendali = $this->input->post('kd_kendali');
		$kendali = $this->input->post('kendali');

		$data = array(
			'kd_kendali' => $kd_kendali,
			'kendali' => $kendali
			 );
		$this->M_data->input_data_kendali($data);
		$this->show_v_kendali();
	}

	function hapus_data_kendali(){
		$kd_kendali = $this->input->post('kd_kendali');
		$where = array('kd_kendali' => $kd_kendali);
		$this->M_data->hapus_kendali($where,'tb_kendali');
		$this->show_v_kendali();
	}

	function edit_data_kendali($kd_kendali){
		$data['Title'] = "gejala";
		$data['profil'] = $this->M_data->show_profil()->result();
		$data['kendali'] = $this->M_data->get_where_kendali($kd_kendali)->result();
		$data['content']  = 'v_edit_pengendalian';

		$this->load->view('Admin/partial/v_index',$data);
	}

	function update_data_kendali(){
		$kd_kendali = $this->input->post('kd_kendali');
		$kendali    = $this->input->post('kendali');
		
		$data = array(
			'kendali' => $kendali
		);

		$this->M_data->update_kendali($data,$kd_kendali);
		$data['Title'] = "gejala";
		$data['profil'] = $this->M_data->show_profil()->result();
		$data['kendali'] = $this->M_data->show_kendali()->result();
		$data['content']  = 'v_data_pengendalian_penyakit';

		$this->load->view('Admin/partial/v_index',$data);
	}

	function show_v_rule(){
		$data['Title'] = "rule";
		$data['profil'] = $this->M_data->show_profil()->result();
		$data['rule'] = $this->M_data->show_rule()->result();
		$data['content'] = 'v_data_rule';

		$this->load->view('Admin/partial/v_index',$data);
	}

	function tambah_data_rule(){
		$kd_rule = $this->input->post('kd_rule');
		$kd_penyakit = $this->input->post('kd_penyakit');

		$data = array(
			'kd_rule' => $kd_rule,
			'kd_penyakit' => $kd_penyakit
		);
		$this->M_data->input_data_rule($data);
		$this->show_v_rule();
	}

	function show_v_detail_rule($kd_rule){
		$data['Title'] = "Detailrule";
		$data['profil'] = $this->M_data->show_profil()->result();
		$data['kd_gejala'] = $this->M_data->show_gejala()->result();
		$data['kd_rule'] = $kd_rule;
		$data['content'] = 'v_detail_rule';

		$this->load->view('Admin/partial/v_index',$data);
	}

	public function tambah_detailrule(){
	    // Ambil data yang dikirim dari form
	    $kd_rule = $_POST['kd_rule']; // Ambil data nis dan masukkan ke variabel nis
	    $bobot = $_POST['bobot']; // Ambil data nama dan masukkan ke variabel nama
	 	$kd_gejala =$_POST['kd_gejala'];

	    $data = array();
	    
	    $index = 0; // Set index array awal dengan 0

	    foreach($bobot as $databobot){ // Kita buat perulangan berdasarkan nis sampai data terakhir
	      array_push($data, array(
	        'kd_rule'=>$kd_rule,
	        'kd_gejala' => $kd_gejala[$index],
	        'bobot'=>$bobot[$index] // Ambil dan set data nama sesuai index array dari $index
	      ));

	      $index++;
	    }

	    // print_r($data);
	    
	    $sql = $this->M_data->save_batch($data); // Panggil fungsi save_batch yang ada di model siswa (SiswaModel.php)
	    
	    // Cek apakah query insert nya sukses atau gagal
	    // if($sql){ // Jika sukses
	    //   echo "<script>alert('Data berhasil disimpan');window.location = '".base_url('')."';</script>";
	    // }else{ // Jika gagal
	    //   echo "<script>alert('Data gagal disimpan');window.location = '".base_url('index.php/siswa/form')."';</script>";
	    // }
	    $this->show_v_rule();
  	}

	// function tambah_detailrule($kd_rule){
	// 	$kd_rule     = $kd_rule;
	// 	$kd_gejala   = $this->input->post('kd_gejala');
	// 	$bobot       = $this->input->post('bobot');

	// 	$data = array('' => , );

	// 	// foreach (array_combine($kd_gejala, $bobot) as $bobot => $bobot) {
	// 	// 	$data = array(
	// 	// 		'kd_rule'     => $kd_rule,
	// 	// 		'kd_gejala'   => $k_gelo,
	// 	// 		'bobot'		  => $babat
	// 	// 		 );
	// 	// 	print_r($data)
	// 	// 	// $this->M_data->input_detailrule($data);
	// 	// }

	// //	redirect('Admin/show_v_detail_rule/'.$kd_rule);
	// }

	function v_data_user(){
		$data['Title']="Penyakit";
		$data['profil'] = $this->M_data->show_profil()->result();
		$this->load->view('Admin/v_header',$data);
		$this->load->view('Admin/v_data_user',$data);
		$this->load->view('Admin/v_sidebar',$data);
		$this->load->view('Admin/v_footer',$data);
	}
	function v_riwayat_konsultasi(){
		$data['Title']="Penyakit";
		$data['profil'] = $this->M_data->show_profil()->result();
		$this->load->view('Admin/v_header',$data);
		$this->load->view('Admin/v_riwayat_konsultasi4w',$data);
		$this->load->view('Admin/v_sidebar',$data);
		$this->load->view('Admin/v_footer',$data);
	}
	
}
