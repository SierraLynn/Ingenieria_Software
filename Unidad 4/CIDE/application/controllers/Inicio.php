<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {


	public function __construct()
	{	
		parent::__construct();
		$this->load->model('Usuarios');
		$this->load->database('default');
	}


	public function index()
	{
		$this->load->view('inicio');
	}

	public function usuarios()
	{
		$this->load->view('usuarios');
	}

	public function agregarusuarios()
	{
		$this->load->view('nuevousuario_views');
	}

	public function insertarusuario()
	{
		$Apellido_M = $this->input->post('Apellido2');
		$Apellido_P = $this->input->post('Apellido1');
		$nombre = $this->input->post('nombre_vista');
		$carrera = $this->input->post('carrera');
		$guardar_datos = $this->Usuarios->insertarusuario_model($nombre,$Apellido_P,$Apellido_M, $carrera);
	}

	public function eliminarusuarios()
	{
		$this->load->view('eliminarusuarios_views');
	}

	public function eliminarusuario()
	{
		$id = $this->input->post('id');
		$guardar_datos = $this->Usuarios->eliminarusuario_model($id);
	}

public function editarusuarios()
	{
		$this->load->view('editarusuarios_views');
	}

	public function editarusuario()
	{
		$id = $this->input->post('id');
		$Apellido_M = $this->input->post('Apellido2');
		$Apellido_P = $this->input->post('Apellido1');
		$nombre = $this->input->post('nombre_vista');
		$carrera = $this->input->post('carrera');
		$guardar_datos = $this->Usuarios->editarusuario_model($id,$nombre,$Apellido_P,$Apellido_M, $carrera);
	}


}
