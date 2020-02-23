<?php
class Template{
	protected $_ci;
	function __construct(){
		$this->_ci = &get_instance();
	}
	function display($content,$data=NULL){
		$data['headernya']=$this->_ci->load->view('template_/header',$data,true);
		$data['contentnya']=$this->_ci->load->view($content,$data,true);
		$data['footernya']=$this->_ci->load->view('template_/footer',$data,true);
		$this->_ci->load->view('template_/index',$data);
	}
}
?>