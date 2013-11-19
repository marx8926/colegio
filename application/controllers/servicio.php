<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class servicio extends  CI_Controller{
	
	function __construct() {
		parent::__construct();
		$this->load->model('login_model','log');
		$this->load->model('Servicio/servicio_model','serv');
	}

	function index(){
		$data="";
		$data['lista_servicios']= $this->serv->listar_todo();
		$dataCuerpo['lista_roles']= $roles=$this->log->listar_roles($this->session->userdata('id'));
		$dataCuerpo['cuerpo'] = $this->load->view("menu/gestion_pagos/servicio",$data,true);
		$this->load->view("menu/template",$dataCuerpo);
	}

	function registrar(){
		if($this->input->is_ajax_request()){
			$this->form_validation->set_rules('nombre','nombre','requiered');
			$this->form_validation->set_rules('tipo','tipo','requiered');
			$this->form_validation->set_rules('descripcion','descripcion','requiered');
			$this->form_validation->set_rules('monto','monto','requiered');
			if($this->form_validation->run() == false):
				echo "no guardo";
			else:
			if($_POST['nombre']!="" && $_POST['tipo']!="" && $_POST['descripcion']!="" && $_POST['monto']!="" ){
				$servicio = array(
						'nombre' => $this->input->post('nombre',true),
						'tipo' => $this->input->post('tipo',true),
						'descripcion' => $this->input->post('descripcion',true),
						'monto' => $this->input->post('monto',true)
				);
				$rs=$this->serv->insert($servicio);
				if($rs)
				{
					echo "guardo";
				}else{
					echo "no guardo";
				}	
			}else{
				echo "no guardo";
			}
			endif;
		}else{
			redirect(base_url().'servicio/', 'refresh');
		}
		
	}


}