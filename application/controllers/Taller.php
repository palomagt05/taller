<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Taller extends CI_Controller {

	public function __construct()
	{
		//Hereda los métodos de la super clase CI_Controles
		parent::__construct();
		//Agregar helpers y librerias adicionales al controlador 
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('Taller/index_view');
	}
	public function primer_vista()
	{
		$this->load->view('primer_vista_view');
	}
	public function agregar_taller()
	{
		$this->load->view('Taller/agregar_taller_view');
	}
	public function plantilla()
	{
		$this->load->view('Taller/blank_view');
	}
}
