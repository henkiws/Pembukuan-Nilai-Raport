<?php
class Absensi extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('template_guru');
		$this->load->model('m_crud');
	}
	function index(){
		$data['on_absen']='active';
		$id_kelas=$this->session->userdata('kelas');
		$data['dataSiswa']=$this->m_crud->lihatDataSelect('siswa','kelas',$id_kelas)->result();
		$this->template_guru->display('pages_guru/v_absensi',$data);
	}
	function simpanEdit(){
		$id['nis']=$this->input->post('id');
		$data=array(
			'absen_alfa'=>$this->input->post('absen_alfa'),
			'absen_ijin'=>$this->input->post('absen_ijin'),
			'absen_sakit'=>$this->input->post('absen_sakit')
			);
		$this->m_crud->updateData('siswa',$data,$id);
		echo json_encode(array("status"=>true));
	}
}

?>