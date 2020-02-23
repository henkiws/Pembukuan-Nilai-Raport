<?php
class Template_guru{
	protected $_ci;
	function __construct(){
		$this->_ci = &get_instance();
	}
	function display($content,$data=NULL){
		$data['headernya']=$this->_ci->load->view('template/header',$data,true);
		$data['contentnya']=$this->_ci->load->view($content,$data,true);
		$data['footernya']=$this->_ci->load->view('template/footer',$data,true);
		$this->_ci->load->view('template/index',$data);
	}
}
?>