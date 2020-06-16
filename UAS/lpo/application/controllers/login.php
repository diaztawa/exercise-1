<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index(){
		$this->load->view('admin/v_login');
	}

	public function aksi_login(){
		$username_user= $this->input->post('username');
		$password_user= $this->input->post('password');
		$cek= $this->m_login->cek_login($username_user, $password_user);
		$tes= count($cek);
		if ($tes > 0) {
			$data_login= $this->m_login->cek_login($username_user, $password_user);
			$akses= $data_login->akses;
			$data= array(
				'akses' =>$akses,
				'nama' =>$username_user);
			$this->session->set_userdata($data);
			if ($akses == 'administrator') {
				redirect('admin');
			}elseif ($akses == 'operator') {
				redirect('operator');
			}
		}else{
			echo "Username dan Password salah!";
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
