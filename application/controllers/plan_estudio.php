<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class plan_estudio extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('login_model','log');
		$this->load->model('Plan_Estudio/plan_estudio_model','pe');
	}
	
	
	function index(){
		$data="";
		$data["lista_nivel"] = $this->pe->listar_todo_nivel();
		$data["lista_ciclo"] = $this->pe->listar_todo_ciclo();
		$data["lista_grado"] = $this->pe->listar_todo_grado();
		$data["lista_curso"] = $this->pe->listar_todo_curso();
		$data["lista_curso_grado"] = $this->pe->listar_todo_curso_grado();
		$dataCuerpo['lista_roles']= $this->log->listar_roles($this->session->userdata('id'));
		$dataCuerpo['cuerpo'] = $this->load->view('menu/soporte/plan_estudios',$data,true);
		$this->load->view("menu/template",$dataCuerpo);
	}

	function registrar_nivel(){
		if($this->input->is_ajax_request()){
			$this->form_validation->set_rules('nivel','nivel','requiered');

			if($this->form_validation->run() == false):
				echo "no guardo";
			else:
			if($_POST['nivel']!=""){
				$nivel = array(
						'nivel' => $this->input->post('nivel',true),
				);
				$rs=$this->pe->insert_nivel($nivel);
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
			redirect(base_url().'plan_estudio/', 'refresh');
		}
	}
	

	function editar_nivel()
	{
		if($this->input->is_ajax_request()){
			
			if($_POST['EditarNivel']!=""){
				$nivel = array(
						'nivel' => $this->input->post('EditarNivel',true),
						'activo' => $this->input->post('cboEstadoNivel',true),
						'id' => $this->input->post('ideditarnivel', true)
				);
				$rs=$this->pe->update_nivel($nivel);
				if($rs)
				{
					echo "guardo";
				}else{
					echo "no guardo";
				}
			}else{
				echo "no guardo";
			}
			
		}else{
			redirect(base_url().'plan_estudio/', 'refresh');
		}
	}
	function registrar_ciclo(){
		if($this->input->is_ajax_request()){
			$this->form_validation->set_rules('selectNivel_C','selectNivel_C','requiered');
			$this->form_validation->set_rules('ciclo','ciclo','requiered');

			if($this->form_validation->run() == false):
				echo "no guardo";
			else:
			if($_POST['ciclo']!=""){
				$ciclo = array(
						'nivel' => $this->input->post('selectNivel_C',true),
						'ciclo' => $this->input->post('ciclo',true),
				);
				$rs=$this->pe->insert_ciclo($ciclo);
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
			redirect(base_url().'plan_estudio/', 'refresh');
		}
	}

	function editar_ciclo()
	{
		if($this->input->is_ajax_request()){
			
			if($_POST['EditarCiclo']!=""){
				$nivel = array(
						'ciclo' => $this->input->post('EditarCiclo',true),
						'activo' => $this->input->post('cboEstadoCiclo',true),
						'id' => $this->input->post('ideditarciclo', true)
				);
				$rs=$this->pe->update_ciclo($nivel);
				if($rs)
				{
					echo "guardo";
				}else{
					echo "no guardo";
				}
			}else{
				echo "no guardo";
			}
			
		}else{
			redirect(base_url().'plan_estudio/', 'refresh');
		}
	}
	function listar_ciclo_byNivel(){
		if($this->input->is_ajax_request()){
			echo json_encode($this->pe->listar_ciclo_byNivel_Id($this->input->post('id_nivel',true)));
		}else{
			redirect(base_url().'plan_estudio/', 'refresh');
		}

	}

	function listar_grado_byNivelCiclo_Id(){
		if($this->input->is_ajax_request()){
			echo json_encode($this->pe->listar_grado_byNivelCiclo_Id($this->input->post('id_ciclo',true),$this->input->post('id_nivel',true)));
		}else{
			redirect(base_url().'plan_estudio/', 'refresh');
	}

		

	}
	
	function registrar_grado(){
		if($this->input->is_ajax_request()){
			$this->form_validation->set_rules('selectNivel_G','selectNivel_G','requiered');
			$this->form_validation->set_rules('selectCiclo_G','selectCiclo_G','requiered');
			$this->form_validation->set_rules('grado','grado','requiered');
			if($this->form_validation->run() == false):
				echo "no guardo";
			else:
			if($_POST['grado']!=""){
				$grado = array(
						'selectNivel_G' => $this->input->post('selectNivel_G',true),
						'selectCiclo_G' => $this->input->post('selectCiclo_G',true),
						'grado' => $this->input->post('grado',true),
				);
				$rs=$this->pe->insert_grado($grado);
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
			redirect(base_url().'plan_estudio/', 'refresh');
		}
	}

	function editar_grado()
	{
		if($this->input->is_ajax_request()){
			
			if($_POST['EditarGrado']!=""){
				$nivel = array(
						'id' => $this->input->post('ideditargrado', true),
						'grado' => $this->input->post('EditarGrado',true),
						'activo' => $this->input->post('cboEstadoGrado',true),
						'nivel' => $this->input->post('idnivelgrado', true),
						'ciclo' => $this->input->post('idciclogrado', true)
				);
				$rs=$this->pe->update_grado($nivel);				

				if($rs)
				{
					echo "guardo";
				}else{
					echo "no guardo";
				}
			}else{
				echo "no guardo";
			}
			
		}else{
			redirect(base_url().'plan_estudio/', 'refresh');
		}
	}

	function registrar_curso(){
		if($this->input->is_ajax_request()){
			$this->form_validation->set_rules('nombre','nombre','requiered');
			if($this->form_validation->run() == false):
				echo "no guardo";
			else:
			if($_POST['nombre']!=""){
				$curso = array(
						'nombre' => $this->input->post('nombre',true)
				);
				$rs=$this->pe->insert_curso($curso);
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
			redirect(base_url().'plan_estudio/', 'refresh');
		}
	}

	function editar_curso()
	{
		if($this->input->is_ajax_request()){
			
			if($_POST['EditarCurso']!=""){
				$nivel = array(
						'id' => $this->input->post('ideditarcurso', true),
						'nombre' => $this->input->post('EditarCurso',true),
						'estado' => $this->input->post('cboEstadoCurso',true)
				);
				$rs=$this->pe->update_curso($nivel);				

				if($rs)
				{
					echo "guardo";
				}else{
					echo "no guardo";
				}
			}else{
				echo "no guardo";
			}
			
		}else{
			redirect(base_url().'plan_estudio/', 'refresh');
		}

	}

	function registrar_curso_grado(){
		if($this->input->is_ajax_request()){
			$this->form_validation->set_rules('nivel','nivel','requiered');
			$this->form_validation->set_rules('ciclo','ciclo','requiered');
			$this->form_validation->set_rules('grado','grado','requiered');
			$this->form_validation->set_rules('curso','curso','requiered');
			if($this->form_validation->run() == false):
				echo "no guardo";
			else:
			if($_POST['nivel']!="" && $_POST['ciclo']!="" && $_POST['grado']!="" && $_POST['curso']){
				$curso = array(
						'nivel' => $this->input->post('nivel',true),
						'ciclo' => $this->input->post('ciclo',true),
						'grado' => $this->input->post('grado',true),
						'curso' => $this->input->post('curso',true)
				);
				$rs=$this->pe->insert_curso_grado($curso);
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
			redirect(base_url().'plan_estudio/', 'refresh');
		}
	}

	function editar_curso_grado(){
		if($this->input->is_ajax_request()){


			
			if($_POST['ideditarasignacionnivel']!="" && $_POST['ideditarasignacionciclo']!="" && $_POST['cboEditarAsignacionGrados']!="" && $_POST['cboEditarAsignacionCurso']){
				$curso = array(
						'curso' => $this->input->post('cboEditarAsignacionCurso',true),
						'grado' => $this->input->post('cboEditarAsignacionGrados',true),
						'ciclo' => $this->input->post('ideditarasignacionciclo',true),
						'nivel' => $this->input->post('ideditarasignacionnivel',true)						
				);
				$rs=$this->pe->update_curso_grado($curso);
				if($rs)
				{
					echo "guardo";
				}else{
					echo "no guardo";
				}
			}else{
				echo "no guardo";
			}
			
		}else{
			redirect(base_url().'plan_estudio/', 'refresh');
		}
	}

	function all_cursos()
	{
		if($this->input->is_ajax_request()){
			echo json_encode($this->pe->listar_todo_curso());
		}else{
			redirect(base_url().'plan_estudio/', 'refresh');
		}
	}

	function all_grados()
	{
		if($this->input->is_ajax_request()){
			echo json_encode($this->pe->listar_todo_grado());
		}else{
			redirect(base_url().'plan_estudio/', 'refresh');
		}
	}
}

?>