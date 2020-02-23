<?php
class Mapel extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('template');
		$this->load->model('m_crud');
	}
	function index(){
		$data['on_mapel']="active";
		$data['lihatMapel']=$this->m_crud->lihatData('mapel','id_mapel')->result();
		$this->template->display('pages/V_mapel',$data);
	}
	function simpan(){
		$data=array(
			'id_mapel'=>$this->input->post('id_mapel'),
			'nm_mapel'=>$this->input->post('nm_mapel'),
			'kkm'=>$this->input->post('kkm')
			);
		$this->m_crud->simpanData('mapel',$data);
		echo json_encode(array("status"=>true));
	}
	function hapus($id){
		$this->m_crud->hapusData('mapel','id_mapel',$id);
		echo json_encode(array("status"=>true));
	}
	function ajax_edit($id){
		$data=$this->m_crud->lihatEdit('mapel','id_mapel',$id);
		echo json_encode($data);
	}
	function simpanEdit(){
		$id['id_mapel']=$this->input->post('id_mapel');
		$data=array(
			'nm_mapel'=>$this->input->post('nm_mapel'),
			'kkm'=>$this->input->post('kkm')
			);
		$this->m_crud->updateData('mapel',$data,$id);
		echo json_encode(array("status"=>true));
	}
}
?>