<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller { //toda clase que se va a generar aqui, tiene que tener el nombre del archivo menos la extención".php"

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
		$data ['universidad']= 'UMSA';
		$data ['facultad']= 'FCPN';
		$data ['carrera']= 'informática';

		//$nombre=$_GET['nombre']; //esto es para leer los datos
		//$apellido=$_GET['apellido']; //esto es para leer los datos
		//$data['nombre']=$nombre;  //esto es para enviar los datos leidos
		//$data['apellido']=$apellido; //esto es ara enviar los datos leidos

		$data['nombre']='german'; //esto es ara enviar los datos leidos
		$data['apellido']='gutierrez'; //esro es ara enviar los datos leidos


		$this->load->helper('url'); // esto es para ver las diferentes urls
		$data['sitio1']=site_url('welcome'); //para buscar la url de algun archivo o carpeta
		$data['sitio2']=base_url();
		$data['sitio3']=current_url();


		$this->load->view('myview', $data); // redireccionamos a vista y enviamos los datos
	}
	public function index2()
	{
		$this->load->view('welcome_message');
	}
}
