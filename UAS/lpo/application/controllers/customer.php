<?php 
 
class Customer extends CI_Controller{
		function __construct(){
		parent::__construct();
		$this->load->model('m_customer');
	}
 
	function index(){
		if (!$this->session->userdata('akses')) {
			redirect('login');
		}else{
			$data['customer_list'] = $this->m_customer->tampil_data();	
			$this->load->view('menu/v_customer', $data);
		}
	}


}