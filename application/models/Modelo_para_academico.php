<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo_para_academico extends CI_Model { //toda clase que se va a generar aqui, tiene que tener el nombre del archivo menos la extención".php"

	public function __construct()
	{
		parent::__construct();
	}
	public function alumnos()
	{
		$this->load->database(); //database que está en el config
		$query=$this->db->query('select * from persona'); //en $query ponemos la consulta
		return $query->result();  //retornamos el resultado de la consulta
		
		
	}
	
}
