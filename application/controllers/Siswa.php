<?php
class Siswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('template');
		$this->load->model('m_crud');
	}
	function index(){
		$data['on_siswa_all']="active";
		$data['semuaSiswa']=$this->m_crud->lihatData('siswa','nm_siswa')->result();
		$this->template->display('pages/v_siswa_all',$data);
	}
	function kelas7(){
		$data['on_kelas7']="active";
		$data['kelas7a']=$this->m_crud->lihatWhere('siswa','kelas','7a')->result();
		$data['kelas7b']=$this->m_crud->lihatWhere('siswa','kelas','7b')->result();
		$data['kelas7c']=$this->m_crud->lihatWhere('siswa','kelas','7c')->result();
		$this->template->display('pages/v_siswa_7',$data);
	}
	function kelas8(){
		$data['on_kelas8']="active";
		$this->template->display('pages/v_siswa_8',$data);
	}
	function kelas9(){
		$data['on_kelas9']="active";
		$this->template->display('pages/v_siswa_9',$data);
	}
	function tambah(){
		$this->template->display('pages/v_tambah_siswa');
	}
	function simpan(){
		$nis=$this->input->post('nis');
		$data=array();
		foreach($nis as $key=>$val){
			$data[]=array(
				'nis'=>$_POST['nis'][$key],
				'nm_siswa'=>$_POST['nm_siswa'][$key],
				'alamat'=>$_POST['alamat'][$key],
				'tempat_lahir'=>$_POST['tempat_lhr'][$key],
				'tanggal_lahir'=>$_POST['tanggal_lhr'][$key],
				'jenis_kelamin'=>$_POST['jk'][$key],
				'kelas'=>$_POST['kelas'][$key],
				'status'=>$_POST['status'][$key],
				'tahun_masuk'=>$_POST['masuk'][$key],
				'tahun_lulus'=>$_POST['lulus'][$key]
				);
		}
		$this->m_crud->simpanArray('siswa',$data);
		redirect('index.php/siswa');
	}
	function hapus($id){
		$this->m_crud->hapusData('siswa','nis',$id);
		echo json_encode(array("status"=>true));
	}
	//function edit data siswa
	function ajax_edit($id){
		$data=$this->m_crud->lihatEdit('siswa','nis',$id);
		echo json_encode($data);
	}
	function simpanEdit(){
		$id['nis']=$this->input->post('nis');
		$data=array(
			'nm_siswa'=>$this->input->post('nm_siswa'),
			'alamat'=>$this->input->post('alamat'),
			'tempat_lahir'=>$this->input->post('tempat_lhr'),
			'tanggal_lahir'=>$this->input->post('tanggal_lhr'),
			'jenis_kelamin'=>$this->input->post('jk'),
			'kelas'=>$this->input->post('kelas'),
			'status'=>$this->input->post('status'),
			'tahun_masuk'=>$this->input->post('masuk'),
			'tahun_lulus'=>$this->input->post('lulus')
		);
		$this->m_crud->updateData('siswa',$data,$id);
		echo json_encode(array("status"=>true));
	}
}
?>