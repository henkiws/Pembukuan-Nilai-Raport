<?php
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
		$this->load->model('m_crud');
	}
	function index(){
		$this->load->view('v_login');
	}
	function proses(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$status=$this->input->post('status');

		if ($status=="admin"){
			$valid=$this->m_login->cek($username,md5($password));
			if ($valid->num_rows()>0){
				$this->session->set_userdata('username',$username);
				$this->session->set_userdata('password',$password);
				redirect('index.php/dashboard');
			}else{
				$this->session->set_flashdata('msg','gagal login admin');
				redirect('index.php/login');
			}
		}elseif($status=="guru"){
			$valid=$this->m_login->cek_guru($username,md5($password));
			if ($valid->num_rows()>0){
				$this->session->set_userdata('id_guru',$username);
				$lihat=$this->m_crud->lihatDataSelect('guru','id_guru',$username)->result();

				foreach($lihat as $x){
					$this->session->set_userdata('kelas',$x->wali_kelas);
					$this->session->set_userdata('nm_guru',$x->nm_guru);
				}
				$this->session->set_userdata('password',$password);
				redirect('index.php/dashboard_guru');
			}else{
				$this->session->set_flashdata('msg','gagal login guru');
				redirect('index.php/login');
			}
		}else{
			$this->session->set_flashdata('msg','Pilih login Anda');
			redirect('index.php/login');
		}
	}
	function keluar(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('password');
		redirect('index.php/login');
	}
}
?>