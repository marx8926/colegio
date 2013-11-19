<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usuario extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('login_model','log');
		$this->load->model('Usuario/usuario_model','usu');
		//$this->load->model('login_model','log');
		
	}
	
	
	function index(){
		$data ="";
		$data['listar_usuarios']= $this->usu->select_all_usuario();
		
		$dataCuerpo['lista_roles']= $roles=$this->log->listar_roles($this->session->userdata('id'));
		//$data['usuario'] = $this->usu->select_all_usuario();
		$dataCuerpo['cuerpo'] = $this->load->view('menu/soporte/usuario',$data,true);
		$this->load->view("menu/template",$dataCuerpo);

	}
	
}