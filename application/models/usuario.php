<?php
class Usuario extends CI_Model{ 
	function __construct()
	{
	   //llmando al contructor del modelo
	   parent::__construct();
	}
	function getUser()
	{ 
		$query = $this->db->get('usuario');
		return $query->result_array();
	}
	
	function getUserById($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('usuario');
		return $query->row();
		header('Content-Type: application/json');
		echo json_encode($data);
	}
	
}
