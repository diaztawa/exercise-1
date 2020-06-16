<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_customer extends CI_Model {

	public function tampil_data(){
		return $this->db->select('*')
						->from('tb_pelanggan')
						->join('tb_tarif', 'tb_tarif.kd_tarif = tb_pelanggan.kd_tarif')
						->join('tb_tipetarif', 'tb_tipetarif.id_tptarif = tb_tarif.tp_tarif')
						->get();
				}

	public function tampil_bayar(){
		return $this->db->select('*')
						->from('tb_tagihan')
						->join('tb_pelanggan', 'tb_pelanggan.id_pelanggan = tb_tagihan.id_pelanggan')
						->join('tb_penggunaan', 'tb_penggunaan.id_pelanggan = tb_pelanggan.id_pelanggan')
						->join('tb_tarif', 'tb_tarif.kd_tarif = tb_pelanggan.kd_tarif')
						->join('tb_tipetarif', 'tb_tipetarif.id_tptarif = tb_tarif.tp_tarif')
						->group_by('tb_pelanggan.id_pelanggan, tb_penggunaan.bulan')
						->get();
				}

	public function tampil_kode(){
		return $this->db->select('*')
						->from('tb_tarif')
						->join('tb_tipetarif', 'tb_tipetarif.id_tptarif = tb_tarif.tp_tarif')
						->get();
						
	}

	public function insert_penggunaan()	{
		$data = array(
			'id_pelanggan' => $this->input->post('id_pelanggan'),
			'bulan' => $this->input->post('bulan'),
			'tahun' => $this->input->post('tahun'),
			'meterakhir' => $this->input->post('meterakhir'),
			'meterawal' => $this->input->post('meterawal'),
			);
		$data2 = array(
			'id_pelanggan' => $this->input->post('id_pelanggan'),
			'bulan' => $this->input->post('bulan'),
			'tahun' => $this->input->post('tahun'),
			'jumlah_meter' => $this->input->post('jumlah_meter'),
			'status' => $this->input->post('status'),
			);
		$data2['jumlah_meter']= $data['meterakhir'] - $data['meterawal'];
		$this->db->insert('tb_penggunaan', $data);
		$this->db->insert('tb_tagihan', $data2);
	}

	public function insert_bayar()	{
		$data = array(
			'id_pelanggan' => $this->input->post('id_pelanggan'),
			'bulan' => $this->input->post('bulan'),
			'tahun' => $this->input->post('tahun'),
			'meterakhir' => $this->input->post('meterakhir'),
			'meterawal' => $this->input->post('meterawal'),
			);
		$data2 = array(
			'id_pelanggan' => $this->input->post('id_pelanggan'),
			'bulan' => $this->input->post('bulan'),
			'tahun' => $this->input->post('tahun'),
			'jumlah_meter' => $this->input->post('jumlah_meter'),
			'status' => $this->input->post('status'),
			);
		$data2['jumlah_meter']= $data['meterakhir'] - $data['meterawal'];
		$this->db->insert('tb_penggunaan', $data);
		$this->db->insert('tb_tagihan', $data2);
	}

	public function insert_pelanggan()	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'no_meter' => $this->input->post('no_meter'),
			'alamat' => $this->input->post('alamat'),
			'kd_tarif' => $this->input->post('kd_tarif')
			);
		$this->db->insert('tb_pelanggan', $data);
	}

	public function get($id)	{
		$param= array('id_pelanggan' =>$id);
		$this->db->join('tb_tarif', 'tb_tarif.kd_tarif = tb_pelanggan.kd_tarif');
		return $this->db->get_where('tb_pelanggan', $param);
	}

	public function get_bayar($id)	{
		$param= array('tb_pelanggan.id_pelanggan' =>$id);
		$this->db->join('tb_tarif', 'tb_tarif.kd_tarif = tb_pelanggan.kd_tarif')
				 ->join('tb_tagihan', 'tb_tagihan.id_pelanggan = tb_pelanggan.id_pelanggan');
		return $this->db->get_where('tb_pelanggan', $param);
	}

	public function delete($id){
		$table= array('tb_tagihan', 'tb_penggunaan', 'tb_pembayaran', 'tb_pelanggan');
		$this->db->where('id_pelanggan', $id);
		$this->db->delete($table);
	}
}
