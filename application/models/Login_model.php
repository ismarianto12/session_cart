<?php 

class Login_model extends CI_Model {
	public function periksa_masuk($table,$where) {
		return $this->db->get_where($table,$where);
	}
}