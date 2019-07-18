<?php 
class M_data extends CI_Model{	
    
    function show_profil(){
		$id_user = $this->session->userdata('id_user');
		$sql = "SELECT * FROM tb_user WHERE id_user='$id_user'";
		return $this->db->query($sql);
	}

	function show_penyakit(){
		$sql = "SELECT * FROM tb_penyakit";
		return $this->db->query($sql);
	}
	
	function input_data_penyakit($data){
		$this->db->insert('tb_penyakit',$data);
		return true;
	}

	function hapus_penyakit($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function get_where_penyakit($kd_penyakit){		
    return $this->db->where('kd_penyakit', $kd_penyakit)
    				->get('tb_penyakit');
	}

	function update_penyakit($data, $kd_penyakit){
    $this->db->where('kd_penyakit', $kd_penyakit);
    $this->db->update('tb_penyakit',$data);
	}

	function show_gejala(){
		$sql = "SELECT * FROM tb_gejala";
		return $this->db->query($sql);
	}
	
	function save_batch($data){
    	return $this->db->insert_batch('tb_detail_rule', $data);
  	}

	function input_data_gejala($data){
		$this->db->insert('tb_gejala',$data);
		return true;
	}

	function hapus_gejala($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function get_where_gejala($kd_gejala){		
    return $this->db->where('kd_gejala', $kd_gejala)
    				->get('tb_gejala');
	}

	function update_gejala($data, $kd_gejala){
    $this->db->where('kd_gejala', $kd_gejala);
    $this->db->update('tb_gejala',$data);
	}

	function show_kendali(){
		$sql = "SELECT * FROM tb_kendali";
		return $this->db->query($sql);
	}
	
	function input_data_kendali($data){
		$this->db->insert('tb_kendali',$data);
		return true;
	}

	function hapus_kendali($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function get_where_kendali($kd_kendali){		
    return $this->db->where('kd_kendali', $kd_kendali)
    				->get('tb_kendali');
	}

	function update_kendali($data, $kd_kendali){
    $this->db->where('kd_kendali', $kd_kendali);
    $this->db->update('tb_kendali',$data);
	}

	function show_rule(){
		$sql = "SELECT * FROM tb_data_rule";
		return $this->db->query($sql);
	}

	function input_data_rule($data){
		$this->db->insert('tb_data_rule',$data);
		return true;
	}

	function show_detailrule(){
		$sql = "SELECT * FROM tb_detail_rule";
		return $this->db->query($sql);
	}

	function input_detailrule($data){
		$this->db->insert('tb_detail_rule',$data);
		return true;
	}

	
}