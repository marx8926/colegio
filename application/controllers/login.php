<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends  CI_Controller{
	
	function __construct() {
		parent::__construct();
		$this->load->model('login_model','log');
	}

	function validar_login(){
			if($this->input->is_ajax_request()){
						$this->form_validation->set_rules('usuario','ID Usuario','required|trim');
						$this->form_validation->set_rules('password','Contraseña','required|trim');
						//$password = md5($this->input->post('password',true));
						$password=$this->input->post('password',true);
						$data = array(
								'var_usuario_name' => $this->input->post('usuario',true),
								'var_usuario_password' => $password
						);
						$rs=$this->log->verificar_usuario($data);
						if($rs)
						{
							$this->session->set_userdata($rs);
							echo "ok";
						}else{
							echo "no ok";
						}
			}else{
				redirect(base_url().'inicio', 'refresh');
			}
		}

}