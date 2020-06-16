<?php 
 
class Operator extends CI_Controller{
 
	function index(){
		if (!$this->session->userdata('akses')) {
			redirect('login');
		}else{
			$this->load->view('admin/v_operator');	
		}
	}
}