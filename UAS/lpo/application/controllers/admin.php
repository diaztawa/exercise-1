<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		if (!$this->session->userdata('akses')) {
			redirect('login');
		}
		$this->load->model('m_customer');
	}

	public function index(){
		$data['customer_list']= $this->m_customer->tampil_data();
		$this->load->view('admin/v_admin');
	}

		public function penggunaan(){
			if ($this->uri->segment(3)== "form") {
				$data['customer_list']= $this->m_customer->tampil_data();

				if (isset($_POST['submit'])) {
					$this->m_customer->insert_penggunaan();
					redirect('admin/pembayaran');
				}
			else{
				$id= $this->uri->segment(4);
				$data['customer_list']= $this->m_customer->get($id)->row_array();
				$this->load->view('menu/v_form-pengg', $data);
			}
		}

			elseif ($this->uri->segment(3)== "tambah") {
				$data['customer_list']= $this->m_customer->tampil_kode();

				if (isset($_POST['submit'])) {
					$this->m_customer->insert_pelanggan();
					redirect('admin/penggunaan');
				}
			else{
				$this->load->view('menu/v_form-pelangg', $data);
			}
		}

			elseif ($this->uri->segment(3)==0) {
				$data['customer_list']= $this->m_customer->tampil_data();
				$this->load->view('menu/v_penggunaan', $data);
			}
		}

		public function pembayaran(){
		if ($this->uri->segment(3)== "bayar") {
			$data['customer_list']= $this->m_customer->tampil_bayar();
			if (isset($_POST['submit'])) {
				$this->m_customer->insert_bayar();
				redirect('pembayaran');
			}
		else{
			$id= $this->uri->segment(4);
			$data['customer_list']= $this->m_customer->get_bayar($id)->row_array();
			$this->load->view('menu/v_form-bayar', $data);
		}
	}
		elseif ($this->uri->segment(3)==0) {
			$data['customer_list']= $this->m_customer->tampil_bayar();
			$this->load->view('menu/v_pembayaran', $data);
		}
	}

		public function delete(){
			$id= $this->uri->segment(3);
			$this->m_customer->delete($id);
			redirect('admin/penggunaan');
		}

}
