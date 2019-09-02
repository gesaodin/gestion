<?php
if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**
 * Seguridad MamonSoft C.A
 * 
 *
 * @package mamonsoft.modules.seguridad
 * @subpackage Trabajador
 * @author Carlos Peña
 * @copyright	Derechos Reservados (c) 2014 - 2015, MamonSoft C.A.
 * @link		http://www.mamonsoft.com.ve
 * @since Version 1.0
 *
 */



class MPersona extends CI_Model {

  var $DatosBasicos = null;
  var $Familiares = null;
  var $token = null;

  function __construct() {
    parent::__construct();
    if(!isset($this->DBpace)) $this->load->model('comun/DBpace');
    
  }

  public function obtenerID($id = ''){
    $sConsulta = "SELECT * FROM trabajador where cedula='$id'";
    $obj = $this->DBpace->consultar($sConsulta);
    $this->DatosBasicos = $obj->rs[0];
    $this->Familiares = $this->obtenerFamiliares($id);
	  return $this;
  }

  public function obtenerFamiliares($id){
    $sConsulta = "SELECT * FROM hcm where cedula='$id'";
    $obj = $this->DBpace->consultar($sConsulta);

	  return $obj->rs;
  }


}