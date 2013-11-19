<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class seccion_ambiente_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function insert($data){

		$query = $this->db->query("exec spi_seccion_ambiente ".$data['ambiente'].",".$data['seccion'].",".$data['grado'].",".$data['ciclo'].",".$data['nivel']);
		return $query->row();
	}

	function listar_todo(){
		$query = $this->db->query("exec spc_seccion_ambiente_all");
		return $query->result();
	}

}

?>