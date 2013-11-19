<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ambiente extends  CI_Controller{
	
	function __construct() {
		parent::__construct();
		$this->load->model('login_model','log');
		$this->load->model('Ambiente/ambiente_model','amb');
	}

	function index(){
		$data="";
		$data['lista_ambientes']= $this->amb->listar_todo();
		$dataCuerpo['lista_roles']= $this->log->listar_roles($this->session->userdata('id'));
		$dataCuerpo['cuerpo'] = $this->load->view("menu/gestion_Horario/ambiente",$data,true);
		$this->load->view("menu/template",$dataCuerpo);
	}

	function registrar(){
		if($this->input->is_ajax_request()){
			$this->form_validation->set_rules('nombre','nombre','requiered');
			$this->form_validation->set_rules('tipo','tipo','requiered');
			$this->form_validation->set_rules('nroPersonas','nroPersonas','requiered');
			if($this->form_validation->run() == false):
				echo "no guardo";
			else:
			if($_POST['nombre']!="" && $_POST['tipo']!="" && $_POST['nroPersonas']!="" ){
				$ambiente = array(
						'nombre' => $this->input->post('nombre',true),
						'tipo' => $this->input->post('tipo',true),
						'nroPersonas' => $this->input->post('nroPersonas',true)
				);
				$rs=$this->amb->insert($ambiente);
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
			redirect(base_url().'ambiente/', 'refresh');
		}
		
	}

}