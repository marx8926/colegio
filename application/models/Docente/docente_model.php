<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class docente_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}
	
	function insert($data){
		$query = $this->db->query("exec spi_trabajador '".$data['nombre']."','".$data['apellido']."','".$data['telefono']."',"
			.$data['cargo'].",".$data['tipo_documento'].",'".$data['nro_documento']."','".$data['fecIngreso']
			."','".$data['email']."','".$data['sexo']."','".$data['direccion']."',".$data['distrito'].",".$data['estadoCivil']
			.",'".$data['especialidad']."',".$data['horasTrabajo'].",".$data['PagoHora'].",".$data['condicion']);
		return $query->row();
	}
	
	function listar_todo_docente(){
		$query = $this->db->query("exec spc_trabajador_docente_all");
		return $query->result();
	}

	function listar_todo_administrativo(){
		$query = $this->db->query("exec spc_trabajador_administrativo_all");
		return $query->result();
	}

}

?>