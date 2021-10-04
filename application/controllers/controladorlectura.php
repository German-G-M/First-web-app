<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controladorlectura extends CI_Controller { //toda clase que se va a generar aqui, tiene que tener el nombre del archivo menos la extención".php"

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	/**
	*public function index()
	*{
	*	$this->load->view('welcome_message'); // este es el codigo original
	*}
	*/
	
	public function index()
	{
		//recuperamos los datos y los enviamos a vista de lectura
		$nom =$_GET["nombre"];
		$ap =$_GET["apellido"];
		$data['nnn']=$nom;
		$data['aaa']=$ap;
		//$this->load->view('vistadelectura', $data); //enviamos a la vista

		//aqui abajo controlamos  la base de datos para luego enviarlo a la vista

		$this->load->model("Modelo_para_academico"); //activamos el modelo. con esto llamamos el modelo
		$filas = $this->Modelo_para_academico->alumnos(); //hacemos referencia al archivo fisico y llamamos al metodo "alumnos" y lo almacemnamos en $filas
		$data['nombre']='moises';
		$data['apellido']='silva';
		$data['alumnos']=$filas; //con esto recuperamos el conjunto de resultados que están en $filas
		
		$this->load->view('vistadelectura', $data); //enviamos a la vista
	}
	
	public function index2()
	{
		$this->load->view('welcome_message');
	}
}
