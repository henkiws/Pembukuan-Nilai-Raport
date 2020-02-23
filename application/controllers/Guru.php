<?php
class Guru extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_crud');
		$this->load->library('template');
	}
	function index(){
		$data['on_guru']="active";
		$data['lihatGuru']=$this->m_crud->lihatData('guru','id_guru')->result();
		$this->template->display('pages/V_guru',$data);
	}
	function simpan(){
		$data=array(
			'id_guru'=>$this->input->post('id_guru'),
			'nm_guru'=>$this->input->post('nm_guru'),
			'alamat'=>$this->input->post('alamat'),
			'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
			'id_mapel'=>$this->input->post('id_mapel'),
			'wali_kelas'=>$this->input->post('wali_kelas'),
			'password'=>$this->input->post('password')
			);
		$this->m_crud->simpanData('guru',$data);
		echo json_encode(array("status"=>true));
	}
	function hapus($id){
		$this->m_crud->hapusData('guru','id_guru',$id);
		echo json_encode(array("status"=>true));
	}
	function ajax_edit($id){
		$data=$this->m_crud->lihatEdit('guru','id_guru',$id);
		echo json_encode($data);
	}
	function simpanEdit(){
		$id['id_guru']=$this->input->post('id_guru');
		$data=array(
			'nm_guru'=>$this->input->post('nm_guru'),
			'alamat'=>$this->input->post('alamat'),
			'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
			'id_mapel'=>$this->input->post('id_mapel'),
			'wali_kelas'=>$this->input->post('wali_kelas'),
			'password'=>$this->input->post('password')
			);
		$this->m_crud->updateData('guru',$data,$id);
		echo json_encode(array("status"=>true));
	}
}
?>