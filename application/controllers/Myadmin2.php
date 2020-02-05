<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myadmin2 extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('modeladmin');
		if($this->session->userdata('status') != "login"){
			redirect(base_url(""));
		}
	}

	public function index(){
		$data['title'] = "Admin Website | STTB ";
		$this->load->view('header/headadm', $data);
		$this->load->view('dashboard');
		$this->load->view('footer/footadm');
	}


	public function tambahdata(){
		$data['title'] = "Create Data | STTB ";
		$data['user'] = $this->modeladmin->tampil();
		$this->load->view('header/headadm', $data);
		$this->load->view('login3', $data);
		$this->load->view('footer/footadm');
	}

	function editdata($id=null){
		if(is_null($id)){
			$this->session->set_flashdata('message', 'You Lost!');
			redirect('Myadmin2/tambahdata');
		}else{
			$data['title'] = "Edit Data | STTB";
			$where = array('id' => $id);
			$data['user'] = $this->modeladmin->edit($where,'data_mahasiswa')->result();
			$this->load->view('header/headadm', $data);
			$this->load->view('login3',$data);
			$this->load->view('footer/footadm');
		}

	function f_editdata(){
		$id = $this->input->post('id');
		$npm = $this->input->post('npm');
		$nama = $this->input->post('nama');
		$kelas = $this->input->post('kelas');
		$semester = $this->input->post('semester');
		$jurusan = $this->input->post('jurusan');

		$data = array(
			'npm' => $npm,
			'nama' => $nama,
			'kelas' => $kelas,
			'semester' => $semester,
			'jurusan' => $jurusan
		);

		$where = array(
			'id' => $id
		);

		$this->modeladmin->update($where,$data,'data_mahasiswa');
		redirect('Myadmin/tambahdata');
	}
}
}

