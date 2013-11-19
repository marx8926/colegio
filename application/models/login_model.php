<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}
	
	function verificar_usuario($data){
		$query_udp = $this->db->query("exec spf_verificar_login ".$data['var_usuario_name'].",".$data['var_usuario_password']);
		return $query_udp->row();
	}
	
	function listar_roles($id_user){
		if(isset($id_user)){
			$query = $this->db->query("exec spc_listar_roles '".$id_user."'");
			return $query->result();
		}else{
			return "";
		}
	}

}

?>