<?php
class Dashboard_guru extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('template_guru');
		$this->load->model('m_crud');
		//validasi login belum
		if ($this->session->userdata('id_guru') != TRUE){
			$this->session->set_flashdata('msg','login dulu ya broo');
			redirect('index.php/login');
		}
	}
	function index(){
		$this->template_guru->display('pages_guru/v_dashboard');
	}
}
?>