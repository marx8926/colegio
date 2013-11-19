<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class alumno_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function insert($data){

		$query = $this->db->query("exec spi_alumno '".$data['nombres']."','".$data['apellidos'].
			"','".$data['telefono']."','".$data['fec_nac']."',".$data['sexo'].",".$data['lugarNac'].
			",'".$data['direccion']."',".$data['selectDist'].",".$data['tip_doc'].",'".$data['num_doc'].
			"','".$data['grup_san']."','".$data['antecedente']."','".$data['email']."'");
		return $query->row();
	}

	function update(){

	}

	function listar_todo(){
		$query = $this->db->query("exec spc_ambiente_all");
		return $query->result();
	}

	function buscar_byDni($documento){
		$query = $this->db->query("exec spf_alumno_bydocumento ".$documento);
		return $query->result();	
	}

	function buscar_byFiltroCondicion($filtro,$condicion){
		$query = $this->db->query("exec spf_alumno_byFiltroCondicion '".$filtro."',".$condicion);
		return $query->result();
	}

}

?>