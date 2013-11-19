<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ambiente_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function insert($data){
		
		$query = $this->db->query("exec spi_ambiente '".$data['nombre']."',".$data['tipo'].",".$data['nroPersonas']);
		return $query->row();
	}

	function update(){

	}

	function listar_todo(){
		$query = $this->db->query("exec spc_ambiente_all");
		return $query->result();
	}
}

?>