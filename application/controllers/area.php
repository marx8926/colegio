<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class area extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('area_model','a');
	}
	
	
	function index(){
		$data['area'] = $this->a->select_all_area();
		$dataCuerpo['cuerpo'] = $this->load->view('menu/m_area',$data,true);
		$this->load->view("menu/template",$dataCuerpo);
	}
	
	function registro_area(){
		if($this->input->is_ajax_request()){
			$this->form_validation->set_rules('nombre_area','nombre_area','requiered');
			$this->form_validation->set_rules('descripcion_area','descripcion_area','requiered');
			if($this->form_validation->run() == false):
				echo validation_errors();
			else:
			if($_POST['nombre_area']!="" && $_POST['descripcion_area']!=""){
				$area_data = array(
						'var_area_nombre' => $this->input->post('nombre_area',true),
						'var_area_descripcion' => $this->input->post('descripcion_area',true),
				);
				$rs=$this->a->registro_area($area_data);
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
			redirect(base_url().'menu/m_area', 'refresh');
		}
	}
	
}

?>