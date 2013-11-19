<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class alumno extends  CI_Controller{
	
	function __construct() {
		parent::__construct();
		$this->load->model('login_model','log');
		$this->load->model('Alumno/alumno_model','al');
	}

	function index(){
		$data =null;
		$dataCuerpo['lista_roles']= $roles=$this->log->listar_roles($this->session->userdata('id'));
		$dataCuerpo['cuerpo'] = $this->load->view("menu/gestion_matricula/alumno",$data,true);
		$this->load->view("menu/template",$dataCuerpo);
	}

	function registrar(){

		if($this->input->is_ajax_request()){

			$this->form_validation->set_rules('nombres','nombres','requiered');
			$this->form_validation->set_rules('tip_doc','tip_doc','requiered');
			$this->form_validation->set_rules('fec_nac','fec_nac','requiered');
			$this->form_validation->set_rules('apellidos','apellidos','requiered');
			$this->form_validation->set_rules('num_doc','num_doc','requiered');
			$this->form_validation->set_rules('sexo','sexo','requiered');
			$this->form_validation->set_rules('selectDist','selectDist','requiered');
			$this->form_validation->set_rules('direccion','direccion','requiered');
			$this->form_validation->set_rules('telefono','telefono','requiered');
			$this->form_validation->set_rules('grup_san','grup_san','requiered');
			$this->form_validation->set_rules('antecedente','antecedente','requiered');
			$this->form_validation->set_rules('email','email','requiered');

			if($this->form_validation->run() == false):
				echo "no guardo";
			else:
			if($_POST['nombres']!="" && $_POST['tip_doc']!="" && $_POST['fec_nac']!="" ){
				$alumno = array(
						'nombres' => $this->input->post('nombres',true),
						'tip_doc' => $this->input->post('tip_doc',true),
						'fec_nac' => $this->input->post('fec_nac',true),
						'apellidos' => $this->input->post('apellidos',true),
						'num_doc' => $this->input->post('num_doc',true),
						'sexo' => $this->input->post('sexo',true),
						'selectDist'=>$this->input->post('selectDist',true),
						'direccion'=>$this->input->post('direccion',true),
						'telefono'=>$this->input->post('telefono',true),
						'grup_san'=>$this->input->post('grup_san',true),
						'antecedente'=>$this->input->post('antecedente',true),
						'email'=>$this->input->post('email',true),
						'lugarNac'=>0
				);
				$rs=$this->al->insert($alumno);
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
			redirect(base_url().'alumno/', 'refresh');
		}
	}

	function buscar_byDni(){
		if($this->input->is_ajax_request()){
			$id = $this->input->post('doc',true);
			$resultado=$this->al->buscar_byDni($id);
			echo json_encode($resultado);
		}else{
			redirect(base_url().'alumno/', 'refresh');
		}
	}

	function buscar_byFiltroCondicion(){
		if($this->input->is_ajax_request()){
			$filtro = $this->input->post('filtro',true);
			$condicion = $this->input->post('condicion',true);
			$resultado=$this->al->buscar_byFiltroCondicion($filtro,$condicion);
			echo json_encode($resultado);
		}else{
			redirect(base_url().'alumno/', 'refresh');
		}	
	}

}