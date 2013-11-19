<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class seccion extends  CI_Controller{
	
	function __construct() {
		parent::__construct();
		$this->load->model('login_model','log');
		$this->load->model('Plan_Estudio/plan_estudio_model','pe');
		$this->load->model('Seccion/seccion_model','se');
	}

	function index(){
		$data="";
		$data["lista_nivel"] = $this->pe->listar_todo_nivel();
		$data["lista_secciones"] = $this->se->listar_todo();
		$dataCuerpo['lista_roles']= $roles=$this->log->listar_roles($this->session->userdata('id'));
		$dataCuerpo['cuerpo'] = $this->load->view("menu/gestion_Horario/seccion",$data,true);
		$this->load->view("menu/template",$dataCuerpo);
	}

	function registrar(){
		if($this->input->is_ajax_request()){
			$this->form_validation->set_rules('selectNivel_Seccion','selectNivel_Seccion','requiered');
			$this->form_validation->set_rules('selectCiclo_Seccion','selectCiclo_Seccion','requiered');
			$this->form_validation->set_rules('selectGrado_Seccion','selectGrado_Seccion','requiered');
			$this->form_validation->set_rules('seccion','seccion','requiered');

			if($this->form_validation->run() == false):
				echo "no guardo";
			else:
			if($_POST['selectNivel_Seccion']!="" && $_POST['selectCiclo_Seccion']!="" && $_POST['selectGrado_Seccion']!="" && $_POST['seccion']!="" ){
				$ambiente = array(
						'nivel' => $this->input->post('selectNivel_Seccion',true),
						'ciclo' => $this->input->post('selectCiclo_Seccion',true),
						'grado' => $this->input->post('selectGrado_Seccion',true),
						'seccion' => $this->input->post('seccion',true)
				);
				$rs=$this->se->insert($ambiente);
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

	function listar_ciclo_byNivel(){
		if($this->input->is_ajax_request()){
			echo json_encode($this->pe->listar_ciclo_byNivel_Id($this->input->post('id_nivel',true)));
		}else{
			redirect(base_url().'seccion/', 'refresh');
		}
	}

	function listar_grado_byNivelCiclo(){
		if($this->input->is_ajax_request()){
			echo json_encode($this->pe->listar_grado_byNivelCiclo_Id($this->input->post('id_ciclo',true),$this->input->post('id_nivel',true)));
		}else{
			redirect(base_url().'seccion/', 'refresh');
		}	
	}

}
