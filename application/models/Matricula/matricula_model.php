<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class matricula_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function insert($data){

		$query = $this->db->query("exec spi_fichamatricula '".$data['nrodocumento']."',".$data['situacion'].
			",".$data['tipo'].",".$data['anioElectivo'].",".$data['seccion'].",".$data['grado'].
			",".$data['ciclo'].",".$data['nivel']);
		return $query->row();
	}

	function update(){

	}

	function listar_todo(){

		$query = $this->db->query("exec spc_fichaMatricula_all");
		return $query->result();
		
	}

}

?>
