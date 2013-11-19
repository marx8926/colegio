<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usuario_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}
	
	function select_all_usuario(){
		//$query_udp = $this->db->query('exec spc_usuario_all');
		$query_udp = $this->db->query('select * from usuarios_nombres');
		
		return $query_udp->result();
	}
	//esto hice yoo
	function insert($data){

		$query = $this->db->query("exec spi_usuario '".$data['usuario']."','".$data['pass']."','".$data['id']."',".$data['tipo']);
		return $query->row();
	}


	function one($id, $tipo)
	{
		$query = $this->db->query("exec spf_usuario_bytipoid '".$id."', ".$tipo);

		return $query->result();
	}

	//funcion cambiar usuario

	function update($data)
	{
		$query = $this->db->query("exec spu_usuario '".$data['id']."','".$data['usuario']."','".$data['pass']."','".$data['estado']."'");

		return $query->row();
	}
	
}

?>