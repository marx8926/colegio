<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class plan_estudio_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function insert_nivel($data){
		
		$query = $this->db->query("exec spi_Nivel '".$data['nivel']."'");
		return $query->row();
	}

	function update_nivel($data)
	{
		$query = $this->db->query("exec spu_nivel ".$data['id'].",'".$data['nivel']."','".$data['activo']."'");
		return $query->row();
	}

	function insert_ciclo($data){
		
		$query = $this->db->query("exec spi_ciclo '".$data['ciclo']."',".$data['nivel']);
		return $query->row();
	}
	
	function update_ciclo($data)
	{
		$query = $this->db->query("exec spu_ciclo ".$data['id'].",'".$data['ciclo']."','".$data['activo']."'");
		return $query->row();
	}

	function insert_grado($data){
		
		$query = $this->db->query("exec spi_grado ".$data['selectNivel_G'].",".$data['selectCiclo_G'].",'".$data['grado']."'");
		return $query->row();
	}

	function update_grado($data)
	{
		$query = $this->db->query("exec spu_grado ".$data['id'].",'".$data['grado']."','".$data['activo']."',".$data['ciclo'].",".$data['nivel']);
		return $query->row();
	}
	function insert_curso($data){
		
		$query = $this->db->query("exec spi_curso '".$data['nombre']."'");
		return $query->row();
	}

	function update_curso($data)
	{
		$query = $this->db->query("exec spu_curso ".$data['id'].",'".$data['nombre']."','".$data['estado']."'");
		return $query->row();
	}
	function insert_curso_grado($data){
		
		$query = $this->db->query("exec spi_curso_grado ".
			$data['curso'].",".$data['ciclo'].",".$data['grado'].",".$data['nivel']);
		return $query->row();
	}

	function update(){

	}

	function listar_todo_nivel(){
		$query = $this->db->query("exec spc_nivel_all");
		return $query->result();
	}

	function listar_todo_ciclo(){
		$query = $this->db->query("exec spc_ciclo_all");
		return $query->result();
	}
	
	function listar_todo_grado(){
		$query = $this->db->query("exec spc_grado_all");
		return $query->result();
	}

	function listar_todo_curso(){
		$query = $this->db->query("exec spc_curso_all");
		return $query->result();
	}

	function listar_todo_curso_grado(){
		$query = $this->db->query("exec spc_curso_grado_all");
		return $query->result();
	}

	function listar_ciclo_byNivel_Id($id){
		$query = $this->db->query("exec spf_ciclos_byNivel ".$id);
		return $query->result();	
	}

	function listar_grado_byNivelCiclo_Id($idciclo,$idnivel){

		$query = $this->db->query("exec spf_grado_byNivelCiclo ".$idciclo.",".$idnivel);
		return $query->result();
	}


}

?>