<?php

class User extends CI_Model {

	public function create_user($data) {
		$this->db->insert('users', $data);
	}

	public function login($username, $password, $type) {
		$where = array(
				'username' => $username,
				'password' => $password,
				'user_type'=> $type
			);
		$this->db->select()->from('users')->where($where);
		$query = $this->db->get();
		return $query->first_row('array');	 
	}
	
	public function get_emails() {
		$this->db->select('email')->from('users');
		$query=$this->db->get();
		return $query->result_array();
	}
}

?>
