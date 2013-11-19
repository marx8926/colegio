<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class colegio_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function insert($data){
		$query = $this->db->query("exec spi_colegio '".$data['nroRegistro']."','".$data['nombre']."','".$data['direccion']."','".$data['telefono']."','".$data['director']."','".$data['coordinador']."','".$data['secretario']."','".$data['res_academica']."','".$data['paginaweb']."','".$data['fechaCreacion']."'");
		return $query->row();
	}

	function insert_periodo($data){
		$query = $this->db->query("exec spi_colegioperiodo '".$data['id']."',".$data['periodo'].",'".$data['fecInicio']."','".$data['fecFin']."'");
		return $query->row();
	}

	function update(){

	}

	function listar_todo(){
	}

	function mostrar_colegio(){
		$query = $this->db->query("exec spc_colegio_mostrar");
		return $query->row();
	}

	function listar_periodos($id){
		$query = $this->db->query("exec spf_colegioperiodo_byId '".$id."'");
		return $query->result();
	}

	function listar_anioElectivo(){
		$query = $this->db->query("exec spc_anioelectivo_lista");
		return $query->result();		
	}
}

?>