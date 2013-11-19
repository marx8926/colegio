<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class matricula extends  CI_Controller{
	
	function __construct() {
		parent::__construct();
		$this->load->model('login_model','log');
		$this->load->model('Plan_Estudio/plan_estudio_model','pe');
		$this->load->model('Seccion/seccion_model','sm');
		$this->load->model('Colegio/colegio_model','col');
		$this->load->model('matricula/matricula_model','ma');
	}

	function index(){
		$data="";
		$data["lista_matricula"] = $this->ma->listar_todo();
		$data["lista_anioElectivo"] = $this->col->listar_anioElectivo();
		$data["lista_nivel"] = $this->pe->listar_todo_nivel();
		$dataCuerpo['lista_roles']= $roles=$this->log->listar_roles($this->session->userdata('id'));
		$dataCuerpo['cuerpo'] = $this->load->view("menu/gestion_matricula/ficha_matricula",$data,true);
		$this->load->view("menu/template",$dataCuerpo);
	}

	function registrar(){
		//
		if($this->input->is_ajax_request()){

			$this->form_validation->set_rules('dni_alumno','dni_alumno','requiered');
			$this->form_validation->set_rules('selectSituacion_r','selectSituacion_r','requiered');
			$this->form_validation->set_rules('selecttipo_r','selecttipo_r','requiered');
			$this->form_validation->set_rules('selectSeccion_r','selectSeccion_r','requiered');
			$this->form_validation->set_rules('selectGrado_r','selectGrado_r','requiered');
			$this->form_validation->set_rules('selectCiclo_r','selectCiclo_r','requiered');
			$this->form_validation->set_rules('selectNivel_r','selectNivel_r','requiered');
			$this->form_validation->set_rules('selectanioelectivo_r','selectanioelectivo_r','requiered');

			if($this->form_validation->run() == false):
				echo "no guardo";
			else:
			if($_POST['dni_alumno']!="" && $_POST['selectSituacion_r']!="" 
				&& $_POST['selecttipo_r']!=""
				&& $_POST['selectanioelectivo_r']!="" 
				&& $_POST['selectSeccion_r']!="" 
				&& $_POST['selectGrado_r']!=""
				&& $_POST['selectCiclo_r']!="" && $_POST['selectNivel_r']!="" ){
				$matricula = array(
						'nrodocumento' => $this->input->post('dni_alumno',true),
						'situacion' => $this->input->post('selectSituacion_r',true),
						'tipo' => $this->input->post('selecttipo_r',true),
						'anioElectivo' => $this->input->post('selectanioelectivo_r',true),
						'seccion' => $this->input->post('selectSeccion_r',true),
						'grado' => $this->input->post('selectGrado_r',true),
						'ciclo'=>$this->input->post('selectCiclo_r',true),
						'nivel'=>$this->input->post('selectNivel_r',true)
				);
				$rs=$this->ma->insert($matricula);
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
			redirect(base_url().'matricula/', 'refresh');
		}

	}

	function listar_ciclo_byNivel(){
		if($this->input->is_ajax_request()){
			echo json_encode($this->pe->listar_ciclo_byNivel_Id($this->input->post('id_nivel',true)));
		}else{
			redirect(base_url().'matricula/', 'refresh');
		}
	}

	function listar_grado_byNivelCiclo(){
		if($this->input->is_ajax_request()){
			echo json_encode($this->pe->listar_grado_byNivelCiclo_Id($this->input->post('id_ciclo',true),$this->input->post('id_nivel',true)));
		}else{
			redirect(base_url().'matricula/', 'refresh');
		}	
	}

	function listar_seccion_byNivelCicloGrado(){
		if($this->input->is_ajax_request()){
			echo json_encode($this->sm->listar_seccion_byNivelCicloGrado_Id($this->input->post('id_grado',true),$this->input->post('id_ciclo',true),$this->input->post('id_nivel',true)));
		}else{
			redirect(base_url().'matricula/', 'refresh');
		}
	}

}