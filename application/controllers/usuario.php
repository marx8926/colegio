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

	function registrar()
	{


		if($this->input->is_ajax_request()){
			$this->form_validation->set_rules('userIdhidden','userIdhidden','requiered');
			$this->form_validation->set_rules('userTypehidden','userTypehidden','requiered');
			$this->form_validation->set_rules('nombre','nombre','requiered');
			$this->form_validation->set_rules('password','password','requiered');
			$this->form_validation->set_rules('Conf_pass','Conf_pass', 'requiered');


			if($this->form_validation->run() == false):
				echo "no guardo";
			else:
			if($_POST['nombre']!="" && $_POST['password']!="" && $_POST['Conf_pass']!="" &&
			 $_POST['password']== $_POST['Conf_pass'] ){
				$usuario = array(
						'usuario' => $this->input->post('nombre',true),
						'pass' => $this->input->post('password',true),
						'id' => $this->input->post('userIdhidden',true),
						'tipo' => $this->input->post('userTypehidden',true)
				);
				$rs=$this->usu->insert($usuario);
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
			redirect(base_url().'usuario/', 'refresh');
		}
	}
	
	function buscar_id(){
		if($this->input->is_ajax_request()){
			$id = $this->input->post('id',true);
			$tipo = $this->input->post('tipo', true);

			$rs = $this->usu->one($id, $tipo);

			echo json_encode($rs);
		}else{
			redirect(base_url().'usuario/', 'refresh');
		}
	}

	function editar()
	{
		if($this->input->is_ajax_request()){
			

			if($_POST['nombreE']!="" && $_POST['passwordE']!="" && $_POST['confpassE']!="" &&
			 $_POST['passwordE']== $_POST['confpassE'] ){
				$usuario = array(
						'usuario' => $this->input->post('nombreE',true),
						'pass' => $this->input->post('passwordE',true),
						'id' => $this->input->post('idusuario',true),
						'estado' => $this->input->post('selectEst',true)
				);
				$rs=$this->usu->update($usuario);
				if($rs)
				{
					echo "guardo";
				}else{
					echo "no guardo";
				}	
			}else{
				echo "no guardo";
			}
	;
		}else{
			redirect(base_url().'usuario/', 'refresh');
		}
	}
}