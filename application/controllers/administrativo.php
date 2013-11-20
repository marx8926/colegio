<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class administrativo extends  CI_Controller{
	
	function __construct() {
		parent::__construct();
		$this->load->model('login_model','log');
		$this->load->model('docente/docente_model','doc');
	}

	function index(){
		$data="";
		$data['lista_administrativo']=$this->doc->listar_todo_administrativo();
		$dataCuerpo['lista_roles']= $roles=$this->log->listar_roles($this->session->userdata('id'));
		$dataCuerpo['cuerpo'] = $this->load->view("menu/soporte/administrativo",$data,true);
		$this->load->view("menu/template",$dataCuerpo);
	}

	function registrar(){
		if($this->input->is_ajax_request()){
			$this->form_validation->set_rules('nombres','nombres','requiered');
			$this->form_validation->set_rules('apellidos','apellidos','requiered');
			$this->form_validation->set_rules('telefono','telefono','requiered');
			$this->form_validation->set_rules('direccion','direccion','requiered');
			$this->form_validation->set_rules('selectTipoDoc','selectTipoDoc','requiered');
			$this->form_validation->set_rules('sexo','sexo','requiered');
			$this->form_validation->set_rules('horas','horas','requiered');
			$this->form_validation->set_rules('fec_ing','fec_ing','requiered');
			$this->form_validation->set_rules('selectEstadoCivil','selectEstadoCivil','requiered');
			$this->form_validation->set_rules('email','email','requiered');
			$this->form_validation->set_rules('selectCondicion','selectCondicion','requiered');
			$this->form_validation->set_rules('especialidad','especialidad','requiered');
			$this->form_validation->set_rules('pago_hora','pago_hora','requiered');
			$this->form_validation->set_rules('num_doc','num_doc','requiered');
			$this->form_validation->set_rules('distrito','distrito','requiered');

			if($this->form_validation->run() == false):
				echo "no guardo";
			else:
			if($_POST['nombres']!=""  && $_POST['apellidos']!="" && $_POST['num_doc']!="" && $_POST['pago_hora']!="" && $_POST['fec_ing']!="" && $_POST['horas']!=""){
				$administrativo = array(
						'nombre' => $this->input->post('nombres',true),
						'apellido' => $this->input->post('apellidos',true),
						'telefono' => $this->input->post('telefono',true),
						'cargo' => $this->input->post('cargo',true),
						'tipo_documento' => $this->input->post('selectTipoDoc',true),
						'nro_documento' => $this->input->post('num_doc',true),
						'fecIngreso' => $this->input->post('fec_ing',true),
						'email' => $this->input->post('email',true),
						'sexo' => $this->input->post('sexo',true),
						'direccion' => $this->input->post('direccion',true),
						'distrito'=> $this->input->post('distrito',true),
						'estadoCivil' => $this->input->post('selectEstadoCivil',true),
						'especialidad' => $this->input->post('especialidad',true),
						'horasTrabajo'=> $this->input->post('horas',true),
						'PagoHora' =>$this->input->post('pago_hora',true),
						'condicion' =>$this->input->post('selectCondicion',true)
				);
				$rs=$this->doc->insert($administrativo);
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
			redirect(base_url().'administrativo/', 'refresh');
		}

	}

	function administrativo_id()
	{
		if($this->input->is_ajax_request()){
			$id = $this->input->post('id',true);

			$rs = $this->doc->administrativo($id);

			echo json_encode($rs);
		}else{
			redirect(base_url().'administrativo/', 'refresh');
		}
	}

	function editar()
	{
		if($this->input->is_ajax_request()){
			
			
			if($_POST['nombresE']!=""  && $_POST['apellidosE']!="" && $_POST['num_docE']!="" &&
			 $_POST['pago_horaE']!="" && $_POST['fec_ingE']!="" && $_POST['horasE']!=""){
				$docente = array(
						'id' => $this->input->post('idadministrativo',true),
						'nombre' => $this->input->post('nombresE',true),
						'apellido' => $this->input->post('apellidosE',true),
						'telefono' => $this->input->post('telefonoE',true),
						'cargo' => 3,
						'tipo_documento' => $this->input->post('selectTipoDocE', true),
						'nro_documento' => $this->input->post('num_docE',true),
						'fecIngreso' => $this->input->post('fec_ingE',true),
						'email' => $this->input->post('emailE',true),
						'sexo' => $this->input->post('sexoE',true),
						'direccion' => $this->input->post('direccionE',true),
						'distrito'=> $this->input->post('distritoE',true),
						'especialidad' => $this->input->post('especialidadE',true),
						'horasTrabajo'=> $this->input->post('horasE',true),
						'PagoHora' =>$this->input->post('pago_horaE',true),
						'estadocivil' => $this->input->post('selectEcivil',true),
						'estado' => $this->input->post('selectEstadoE',true)
				);

				$rs=$this->doc->update_administrativo($docente);
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
			redirect(base_url().'docente/', 'refresh');
		}
	}

}