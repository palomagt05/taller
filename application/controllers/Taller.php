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
	public function paloma()
	{
		$this->load->view('Taller/paloma_view');
	}
	public function formulario()
	{
		$this->load->view('Commons/head_view');
		$this->load->view('Commons/body_open_view');
		$this->load->view('Commons/wrapper_open_view');
		$this->load->view('Commons/navbar_view');
		$this->load->view('Commons/main_sidebar_view');

		// Aquí va el contenido
		$this->load->view('Taller/form_view');
		//$this->load->view('Commons/content_wrapper_view');

		$this->load->view('Commons/footer_view');
		$this->load->view('Commons/wrapper_close_view');
		$this->load->view('Commons/javascript_view');

		$this->load->view('Taller/form_datatable_view');
		
		$this->load->view('Commons/body_close_view');
	}
}
