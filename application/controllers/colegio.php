<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class colegio extends  CI_Controller{
	
	function __construct() {
		parent::__construct();
		$this->load->model('login_model','log');
		$this->load->model('Colegio/colegio_model','col');
	}

	function index(){
		$data =null;
		$periodo=null;
		$rs_colegio = $this->col->mostrar_colegio();
		$data['info_colegio']= $rs_colegio;
		$periodo['lista_periodo'] = $this->col->listar_periodos($rs_colegio->id);
		$data['periodo_evaluacion'] = $this->load->view("menu/soporte/colegio_periodo",$periodo,true);
		$dataCuerpo['lista_roles']= $this->log->listar_roles($this->session->userdata('id'));
		$dataCuerpo['cuerpo'] = $this->load->view("menu/soporte/colegio",$data,true);
		$this->load->view("menu/template",$dataCuerpo);
	}

	function registrar(){
		if($this->input->is_ajax_request()){
			$this->form_validation->set_rules('nroRegistro','nroRegistro','requiered');
			$this->form_validation->set_rules('res_academica','res_academica','requiered');
			$this->form_validation->set_rules('nombre','nombre','requiered');
			$this->form_validation->set_rules('direccion','direccion','requiered');
			$this->form_validation->set_rules('telefono','telefono','requiered');
			$this->form_validation->set_rules('director','director','requiered');
			$this->form_validation->set_rules('coordinador','coordinador','requiered');
			$this->form_validation->set_rules('secretario','secretario','requiered');
			$this->form_validation->set_rules('paginaweb','paginaweb','requiered');

			if($this->form_validation->run() == false):
				echo "no guardo";
			else:
			if($_POST['nroRegistro']!=""  && $_POST['coordinador']!="" && $_POST['secretario']!="" && $_POST['director']!="" && $_POST['res_academica']!="" && $_POST['nombre']!="" && $_POST['direccion']!="" ){
				$colegio = array(
						'nroRegistro' => $this->input->post('nroRegistro',true),
						'res_academica' => $this->input->post('res_academica',true),
						'direccion' => $this->input->post('direccion',true),
						'nombre' => $this->input->post('nombre',true),
						'telefono' => $this->input->post('telefono',true),
						'director' => $this->input->post('director',true),
						'coordinador' => $this->input->post('coordinador',true),
						'secretario' => $this->input->post('secretario',true),
						'paginaweb' => $this->input->post('paginaweb',true),
						'fechaCreacion' => $this->input->post('fecCreacion',true)
				);
				$rs=$this->col->insert($colegio);
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
			redirect(base_url().'colegio/', 'refresh');
		}

	}

	function editar(){
		if($this->input->is_ajax_request()){
			
			if($_POST['nroRegistro']!=""  && $_POST['coordinador']!="" && $_POST['secretario']!="" && $_POST['director']!="" && $_POST['res_academica']!="" && $_POST['nombre']!="" && $_POST['direccion']!="" ){
				$colegio = array(
						'id' => $this->input->post('id_colegio', true),
						'nroRegistro' => $this->input->post('nroRegistro',true),
						'res_academica' => $this->input->post('res_academica',true),
						'direccion' => $this->input->post('direccion',true),
						'nombre' => $this->input->post('nombre',true),
						'telefono' => $this->input->post('telefono',true),
						'director' => $this->input->post('director',true),
						'coordinador' => $this->input->post('coordinador',true),
						'secretario' => $this->input->post('secretario',true),
						'paginaweb' => $this->input->post('paginaweb',true),
						'fechaCreacion' => $this->input->post('fecCreacion',true)
				);
				$rs=$this->col->update($colegio);
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
			redirect(base_url().'colegio/', 'refresh');
		}

	}

	function registrar_periodo(){

		if($this->input->is_ajax_request()){
			$this->form_validation->set_rules('periodo','periodo','requiered');
			$this->form_validation->set_rules('fecInicio','fecInicio','requiered');
			$this->form_validation->set_rules('fecFin','fecFin','requiered');

			if($this->form_validation->run() == false):
				echo "no guardo";
			else:
			if($_POST['periodo']!=""  && $_POST['fecInicio']!="" && $_POST['fecFin']!="" ){

				echo strtotime($this->input->post('fecFin',true));
				$periodo_evaluacion = array(
						'id'=> $this->input->post('id',true),
						'periodo' => $this->input->post('periodo',true),
						'fecInicio' => $this->input->post('fecInicio',true),
						'fecFin' => $this->input->post('fecFin',true)
				);
				$rs=$this->col->insert_periodo($periodo_evaluacion);
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
			redirect(base_url().'colegio/', 'refresh');
		}

	}

}