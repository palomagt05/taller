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
		$edicion = $this->uri->segment(2, 0);
		$talleres = $this->General_model->get('talleres', array(), array(), '');
		$data 	= array(
			'talleres'	=>	$talleres,
			'edicion'	=>	$edicion,
		);

		$this->load->view('Commons/head_view');
		$this->load->view('Commons/body_open_view');
		$this->load->view('Commons/wrapper_open_view');
		$this->load->view('Commons/navbar_view');
		$this->load->view('Commons/main_sidebar_view');

		// Aquí va el contenido
		$this->load->view('Taller/form_view', $data);
		//$this->load->view('Commons/content_wrapper_view');
		// Aquí agregamos ventana modal
		$this->load->view('Taller/form_modal_view');

		$this->load->view('Commons/footer_view');
		$this->load->view('Commons/wrapper_close_view');
		$this->load->view('Commons/javascript_view');

		// Aquí mi javascript
		$this->load->view('Taller/form_datatable_view');
		$this->load->view('Taller/form_sa_view');
		$this->load->view('Taller/form_js_view');
		
		$this->load->view('Commons/body_close_view');
	}

	public function guardar_formulario()
	{
		foreach ($_POST as $key => $value) {
			echo "$key = $value <br>";
		}

		$valores = array(
			'fecha_reg'	=>	date("Y-m-d H:i:s"),
			'nombre'	=>	$this->input->post('nombre'),
			'tipo'		=>	$this->input->post('tipo'),
			'lugar'		=>	$this->input->post('lugar'),
			'hora'		=>	$this->input->post('hora'),
			'fecha'		=>	$this->input->post('fecha'),
			'email'		=>	$this->input->post('correo'),
			'cupo'		=>	$this->input->post('cupo'),
		);

		$this->General_model->set('talleres', $valores);
		redirect(base_url('formulario/1'));
	}

	public function borrar_taller()
	{
		$id_taller = $this->uri->segment(2);
		//echo $id_taller;
		$valores = array(
			'id_taller'	=>	$id_taller,
		);
		$this->General_model->delete('talleres', $valores);
		redirect(base_url('formulario/2'));
	}
}
