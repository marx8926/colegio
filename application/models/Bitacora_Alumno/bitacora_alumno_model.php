<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class bitacora_alumno_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function insert($data){

		$query = $this->db->query("exec spi_bitacora ".$data['selectCurso'].",".$data['selectTipo'].
			",'".$data['titulo']."','".$data['descripcion']."','".$data['id_alumno']."'");
		return $query->row();
	}

	function listar_todos(){
		
		$query = $this->db->query("exec spc_bitacora_all");
		return $query->result();
	}

}

?>