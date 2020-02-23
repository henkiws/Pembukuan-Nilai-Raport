<?php
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('template');
		//validasi login belum
		if ($this->session->userdata('username') != TRUE){
			$this->session->set_flashdata('msg','login dulu ya broo');
			redirect('index.php/login');
		}
	}
	function index(){
		$data['on_dashboard']="active";
		$this->template->display('pages/v_dashboard',$data);
	}
}
?>