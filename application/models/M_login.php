<?php
class M_login extends CI_Model{
	function cek($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get('user');
	}
	function cek_guru($username,$password){
		$this->db->where('id_guru',$username);
		$this->db->where('password',$password);
		return $this->db->get('guru');
	}
}
?>