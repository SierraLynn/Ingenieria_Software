<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Model {

	public function verusuarios()
	{

		$us = $this->db->query("SELECT * FROM usuarios");
		$data = $us->result_array();
		return $data;
	}

	public function insertarusuario_model($nombre,$Apellido_P,$Apellido_M,$carrera)
	{
		$ejecutar_consulta = $this->db->query("INSERT INTO usuarios (nombre,Apellido_P,Apellido_M,carrera) VALUES ('$nombre' ,'$Apellido_P','$Apellido_M','$carrera')");
	}
	public function eliminarusuario_model($id)
	{
		$ejecutar_consulta = $this->db->query("DELETE FROM usuarios WHERE id=$id ORDER BY nombre,Apellido_P,Apellido_M,carrera ");
	}
public function editarusuario_model($id,$nombre,$Apellido_P,$Apellido_M,$carrera)
	{
		$ejecutar_consulta = $this->db->query("UPDATE usuarios SET nombre='$nombre',Apellido_M='$Apellido_M',Apellido_P='$Apellido_P',carrera='$carrera'");
	}
	
}
