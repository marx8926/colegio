<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usuario_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}
	
	function select_all_usuario(){
		//$query_udp = $this->db->query('exec spc_usuario_all');
		$query_udp = $this->db->query('select * from usuarios_nombres');
		
		return $query_udp->result();
	}
	//esto hice yoo
	/**function insert(){
		$query = $this->db->query("exec spi_usuario '".$data['name']."',".$data['pass'].",".$data['ciclo'].",".$data['nivel']);
		return $query->row();
	}
	**/
}

?>