<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class menu extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('login_model','log');
	}
	
	
	function index(){
		$data="";
		$dataCuerpo['lista_roles']= $this->log->listar_roles($this->session->userdata('id'));
		$dataCuerpo['cuerpo'] = $this->load->view("menu/principal",$data,true);
		$this->load->view("menu/template",$dataCuerpo);
	}
	
}

?>