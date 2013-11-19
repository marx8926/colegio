<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class seccion_ambiente extends  CI_Controller{
	
	function __construct() {
		parent::__construct();
		$this->load->model('login_model','log');
		$this->load->model('Ambiente/ambiente_model','amb');
		$this->load->model('Plan_Estudio/plan_estudio_model','pe');
		$this->load->model('Seccion/seccion_model','sm');
		$this->load->model('Seccion_Ambiente/seccion_ambiente_model','sam');
	}

	function index(){
		$data="";
		$data['lista_seccion_ambiente'] = $this->sam->listar_todo();
		$data['lista_nivel'] = $this->pe->listar_todo_nivel();
		$data['lista_ambientes']= $this->amb->listar_todo();
		$dataCuerpo['lista_roles']= $this->log->listar_roles($this->session->userdata('id'));
		$dataCuerpo['cuerpo'] = $this->load->view("menu/gestion_Horario/seccion_ambiente",$data,true);
		$this->load->view("menu/template",$dataCuerpo);
	}

	function listar_ciclo_byNivel(){
		if($this->input->is_ajax_request()){
			echo json_encode($this->pe->listar_ciclo_byNivel_Id($this->input->post('id_nivel',true)));
		}else{
			redirect(base_url().'seccion_ambiente/', 'refresh');
		}
	}

	function listar_grado_byNivelCiclo(){
		if($this->input->is_ajax_request()){
			echo json_encode($this->pe->listar_grado_byNivelCiclo_Id($this->input->post('id_ciclo',true),$this->input->post('id_nivel',true)));
		}else{
			redirect(base_url().'seccion_ambiente/', 'refresh');
		}	
	}

	function listar_seccion_byNivelCicloGrado(){
		if($this->input->is_ajax_request()){
			echo json_encode($this->sm->listar_seccion_byNivelCicloGrado_Id($this->input->post('id_grado',true),$this->input->post('id_ciclo',true),$this->input->post('id_nivel',true)));
		}else{
			redirect(base_url().'seccion_ambiente/', 'refresh');
		}
	}

	function registrar(){
		if($this->input->is_ajax_request()){
			$this->form_validation->set_rules('nivel','nivel','requiered');
			$this->form_validation->set_rules('ciclo','ciclo','requiered');
			$this->form_validation->set_rules('grado','grado','requiered');
			$this->form_validation->set_rules('seccion','seccion','requiered');
			$this->form_validation->set_rules('ambiente','ambiente','requiered');

			if($this->form_validation->run() == false):
				echo "no guardo";
			else:
			if($_POST['nivel']!="" && $_POST['ciclo']!="" && $_POST['grado']!="" && $_POST['seccion']!="" ){
				$seccion_ambiente = array(
						'nivel' => $this->input->post('nivel',true),
						'ciclo' => $this->input->post('ciclo',true),
						'grado' => $this->input->post('grado',true),
						'seccion' => $this->input->post('seccion',true),
						'ambiente' => $this->input->post('ambiente',true),
				);
				$rs=$this->sam->insert($seccion_ambiente);
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
			redirect(base_url().'seccion/', 'refresh');
		}
	}

}