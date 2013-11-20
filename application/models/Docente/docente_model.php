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

	function docente($id)
	{
		$query = $this->db->query("exec spf_docente_byid '".$id."'");
		return $query->result();
	}

	function administrativo($id)
	{
		$query = $this->db->query("exec spf_administrativo_byid '".$id."'");
		return $query->result();
	}

	function update_docente($data)
	{
		
		$query = $this->db->query("exec spu_trabajador '".$data['id']."','".$data['nombre']."','".$data['apellido']."','".$data['telefono']."',"
			.$data['cargo'].",'".$data['nro_documento']."','".$data['fecIngreso']
			."','".$data['email']."','".$data['sexo']."','".$data['direccion']."',".$data['distrito']			
			.",'".$data['especialidad']."',".$data['horasTrabajo'].",".$data['PagoHora']);
		return $query->row();
	}

	function update_administrativo($data)
	{
		$query = $this->db->query("exec spu_trabajador_tipo '".$data['id']."','".$data['nombre']."','".$data['apellido']."','".$data['telefono']."',"
			.$data['cargo'].",".$data['tipo_documento'].",'".$data['nro_documento']."','".$data['fecIngreso']
			."','".$data['email']."','".$data['sexo']."','".$data['direccion']."',".$data['distrito']			
			.",'".$data['especialidad']."',".$data['horasTrabajo'].",".$data['PagoHora'].",".$data['estadocivil'].",'".$data['estado']."'");
		return $query->row();
	}
}

?>