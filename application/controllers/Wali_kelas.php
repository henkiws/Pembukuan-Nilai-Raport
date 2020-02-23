<?php
class Wali_kelas extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('template_guru');
		$this->load->model('m_crud');
	}
	function index(){
		$id_kelas=$this->session->userdata('kelas'); //id kelas diambil dari session login
		$data['dataSiswaKelas']=$this->m_crud->lihatDataSelect('siswa','kelas',$id_kelas)->result();
		$this->template_guru->display('pages_guru/v_wali_kelas',$data);
	}
	//tombol input
	function input_nilai($id){
		$data['inputNilaiSiswa']=$this->m_crud->lihatDataSelect('siswa','nis',$id)->result(); //select data siswa by id
		$data['mapelnya']=$this->m_crud->lihatData('mapel','id_mapel')->result();
		$this->template_guru->display('pages_guru/v_input_nilai',$data);
	}
	//tommbol edit
	function edit_nilai($id){
		$data['inputNilaiSiswa']=$this->m_crud->lihatDataSelect('siswa','nis',$id)->result();
		$data['joinNilai']=$this->m_crud->lihatJoinNilai($id)->result();
		$this->template_guru->display('pages_guru/v_edit_nilai',$data);
	}
	//tombol view per siswa
	function view_nilai($id){
		$id_kelas=$this->session->userdata('kelas'); //id kelas diambil dari session login
		$data['dataGuru']=$this->m_crud->lihatDataSelect('guru','wali_kelas',$id_kelas)->result();
		$data['dataSiswa']=$this->m_crud->lihatDataSelect('siswa','nis',$id)->result();
		$data['joinNilai']=$this->m_crud->lihatJoinNilai($id)->result();
		$this->template_guru->display('pages_guru/v_view_nilai',$data);
	}
	//tombol view all siswa
	function view_nilaiALL(){
		$id_kelas=$this->session->userdata('kelas'); //id kelas diambil dari session login
		$data['dataSiswaKelas']=$this->m_crud->lihatDataSelect('siswa','kelas',$id_kelas)->result();
		$data['dataGuru']=$this->m_crud->lihatDataSelect('guru','wali_kelas',$id_kelas)->result();
		$data['dataSiswa']=$this->m_crud->lihatData('siswa','nis')->result();
		$data['joinNilai']=$this->m_crud->lihatJoinNilaiALL()->result();
		$this->template_guru->display('pages_guru/v_view_nilai_all',$data);
	}
	function simpan_nilaiUTS(){
		$id_mapel=$this->input->post('id_mapel'); //bentuk array
		$id['nis']=$this->input->post('nis');
		//simpan nilai uts
		$data=array();
		foreach($id_mapel as $key=>$val){
			$data[]=array(
			'nis'=>$this->input->post('nis'),
			'id_mapel'=>$_POST['id_mapel'][$key],
			'uts'=>$_POST['nilai_uts'][$key],
			'tahun_ajaran'=>$this->input->post('tahun_ajaran')
			);
		}
		$this->m_crud->simpanArray('nilai',$data);
		//update status nilai siswa menjadi 1 = true
		$data=array(
			'status_uts'=>$this->input->post('status_uts')
		);
		$this->m_crud->updateData('siswa',$data,$id);
		//diarahkan ke page lain
		redirect('index.php/Wali_kelas');
	}
	function update_nilaiUTS(){
		$id_mapel=$this->input->post('id_mapel'); //bentuk array

		$data=array();
		foreach ($id_mapel as $key=>$val){
			$data[]=array(
				'id_nilai'=>$_POST['id_nilai'][$key],
				'nis'=>$this->input->post('nis'),
				'id_mapel'=>$_POST['id_mapel'][$key],
				'uts'=>$_POST['nilai_uts'][$key]
			);
		}

		$this->m_crud->updateArray('nilai',$data,'id_nilai'); //update data multiple array BERHASIL :D
		redirect('index.php/wali_kelas');
	}
}// end of class
?>