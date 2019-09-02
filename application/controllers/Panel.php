<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set ( 'America/Caracas' );
define ('__CONTROLADOR', 'Panel');
class Panel extends CI_Controller {

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

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');		
		if(!isset($_SESSION['usuario']))$this->salir();
	}
	public function index(){
		$this->load->model('comun/MGerencia');

		$data['gerencia'] = $this->MGerencia->listar();
		$data['puerto'] = $this->MGerencia->listarPuerto();
		$this->load->view('gestion/home', $data);
		
	}
	

	public function home(){

	}

	/**
	 * 
	 * 
	 */
	public function establecerSueldos(){
		
	}

	public function consultarTrabajador($cedula = ''){

		header('Content-Type: application/json');
		$this->load->model('trabajador/MPersona');

		$Persona = $this->MPersona->obtenerID($cedula);
		echo json_encode($Persona);

	}

	public function salir(){
		session_destroy();
		$this->load->view("gestion/login");
	}
}
