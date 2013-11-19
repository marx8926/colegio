<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class bitacora_alumno extends  CI_Controller{
	
	function __construct() {
		parent::__construct();
		$this->load->model('login_model','log');
		$this->load->model('Bitacora_Alumno/bitacora_alumno_model','ba');
	}

	function index(){
		$data="";
		$data["listar_bitacoras"]=$this->ba->listar_todos();
		$dataCuerpo['lista_roles']= $this->log->listar_roles($this->session->userdata('id'));
		$dataCuerpo['cuerpo'] = $this->load->view("menu/gestion_matricula/bitacora_alumno",$data,true);
		$this->load->view("menu/template",$dataCuerpo);
	}

	function registrar(){
		if($this->input->is_ajax_request()){

			$this->form_validation->set_rules('id_alumno','id_alumno','requiered');
			$this->form_validation->set_rules('selectCurso','selectCurso','requiered');
			$this->form_validation->set_rules('selectTipo','selectTipo','requiered');
			$this->form_validation->set_rules('titulo','titulo','requiered');
			$this->form_validation->set_rules('descripcion','selectGrado_r','requiered');

			if($this->form_validation->run() == false):
				echo "no guardo";
			else:
			if($_POST['id_alumno']!="" && $_POST['selectCurso']!="" 
				&& $_POST['selectTipo']!=""
				&& $_POST['titulo']!="" 
				&& $_POST['descripcion']!="" ){
				$bitacora = array(
						'id_alumno' => $this->input->post('id_alumno',true),
						'selectCurso' => $this->input->post('selectCurso',true),
						'selectTipo' => $this->input->post('selectTipo',true),
						'titulo' => $this->input->post('titulo',true),
						'descripcion' => $this->input->post('descripcion',true)
				);
				$rs=$this->ba->insert($bitacora);
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
			redirect(base_url().'bitacora_alumno/', 'refresh');
		}

	}


}