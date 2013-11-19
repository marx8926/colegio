<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class seccion_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function insert($data){
		$query = $this->db->query("exec spi_seccion '".$data['seccion']."',".$data['grado'].",".$data['ciclo'].",".$data['nivel']);
		return $query->row();
	}

	function update(){

	}

	function listar_todo(){
		$query = $this->db->query("exec spc_seccion_all");
		return $query->result();
	}

	function listar_seccion_byNivelCicloGrado_Id($grado,$idciclo,$idnivel){
		$query = $this->db->query("exec spf_seccion_byNivelCicloGrado ".$grado.",".$idciclo.",".$idnivel);
		return $query->result();
	}

}

?>