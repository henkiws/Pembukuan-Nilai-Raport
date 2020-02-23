<?php
class M_crud extends CI_Model{
	function lihatData($table,$field){
		$this->db->order_by($field,'ASC');
		return $this->db->get($table);
	}
	function simpanData($table,$data){
		$this->db->insert($table,$data);
	}
	function simpanArray($table,$data){
		$this->db->insert_batch($table,$data);
	}
	function hapusData($table,$field,$id){
		$this->db->where($field,$id);
		$this->db->delete($table);
	}
	function lihatEdit($table,$field,$id){
		$this->db->where($field,$id);
		return $this->db->get($table)->row();
	}
	function lihatDataSelect($table,$field,$id){
		$this->db->where($field,$id);
		return $this->db->get($table);
	}
	function updateData($table,$data,$id){
		$this->db->where($id);
		$this->db->update($table,$data);
	}
	function updateArray($table,$data,$id){
		//$this->db->where('id_nilai',$id);
		$this->db->update_batch($table,$data,$id);
	}
	function lihatWhere($table,$field,$id){
		$this->db->where($field,$id);
		return $this->db->get($table);
	}
	//inner join table
	function lihatJoinNilai($id){
		$sql="SELECT nilai.`id_nilai`,siswa.`nis`, siswa.`nm_siswa`,nilai.`id_mapel`,mapel.`nm_mapel`,mapel.`kkm`, nilai.`uts`, nilai.`tahun_ajaran`
			FROM siswa 
			INNER JOIN (nilai INNER JOIN mapel ON nilai.`id_mapel`=mapel.`id_mapel`)
			ON siswa.`nis`=nilai.`nis`
			WHERE nilai.`nis`='$id'";
		return $this->db->query($sql);
	}
	function lihatJoinNilaiALL(){
		$sql="SELECT nilai.`id_nilai`,siswa.`nis`, siswa.`nm_siswa`,nilai.`id_mapel`,mapel.`nm_mapel`,mapel.`kkm`, nilai.`uts`, nilai.`tahun_ajaran`
			FROM siswa 
			INNER JOIN (nilai INNER JOIN mapel ON nilai.`id_mapel`=mapel.`id_mapel`)
			ON siswa.`nis`=nilai.`nis`";
		return $this->db->query($sql);
	}
}
?>