<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function cek_login($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		return $this->db->get('tb_user')->row();
	}
}
