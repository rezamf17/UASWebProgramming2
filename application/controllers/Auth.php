<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('m_login');
	}

	public function index(){
		if($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
			redirect('page/welcome'); // Redirect ke page welcome

		$this->load->view('login2'); // Load view login2.php
	}

	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => sha1($password)
			);
		$cek = $this->m_login->cek_login("login", $where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("Myadmin2/editdata"));

		}else{
			echo "Username dan password salah !";
		}
	}

	public function logout(){
		$this->session->sess_destroy(); // Hapus semua session
		redirect('auth'); // Redirect ke halaman login
	}
}
