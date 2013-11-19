<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class servicio_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function insert($data){
		
		$query = $this->db->query("exec spi_servicio '".$data['nombre']."',".$data['tipo'].",".$data['monto'].",'".$data['descripcion']."'");
		return $query->row();
	}

	function update(){

	}

	function listar_todo(){
		$query = $this->db->query("exec spc_servicio_all");
		return $query->result();
	}
}

?>