<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Model {
	
	public function veradmin()
	{

		$us = $this->db->query("SELECT * FROM alimento");
		$data = $us->result_array();
		return $data;
	}
	
	
public function alimento_model($id_alimento,$Tipo,$analisis_garantizado)
	{
		$ejecutar_consulta = $this->db->query("INSERT INTO alimento (id_alimento,Tipo,analisis_garantizado) VALUES ('$id_alimento' ,'$Tipo','$analisis_garantizado')");
	}

	public function vercaseta()
	{

		$us = $this->db->query("SELECT * FROM casetas");
		$data = $us->result_array();
		return $data;
	}

	public function caseta_model($id_caseta,$Numero,$Peso,$Fecha_llegada,$id_alimento,$id_etapa)
	{
		$ejecutar_consulta = $this->db->query("INSERT INTO casetas (Numero,Peso,Fecha_llegada,id_alimento,id_etapa) VALUES ('$Numero','$Peso','$Fecha_llegada' ,'$id_alimento','$id_etapa')");
	}
	public function veretapa()
	{

		$us = $this->db->query("SELECT * FROM etapa");
		$data = $us->result_array();
		return $data;
	}

	public function etapa_model($id_etapa,$Etapa)
	{
		$ejecutar_consulta = $this->db->query("INSERT INTO casetas (id_etapa,Etapa) VALUES ('$id_etapa' ,'$Etapa')");
	}


	public function agregarcas_model($Numero,$Peso,$Fecha_llegada,$id_alimento,$id_etapa)
	{
		$ejecutar_consulta = $this->db->query("INSERT INTO casetas (id_caseta,Numero,Peso,Fecha_llegada,id_alimento,id_etapa) VALUES ('$id_caseta' ,'$Numero','$Peso','$Fecha_llegada' ,'$id_alimento','$id_etapa')");
		header("Location: Cas");
	}

	public function editarcas_model($Numero,$Peso,$Fecha_llegada,$id_alimento,$id_etapa)
	{
		$ejecutar_consulta = $this->db->query("UPDATE casetas SET  Numero='$Numero',Peso='$Peso',Fecha_llegada='$Fecha_llegada'");
		header("Location: Cas");
	}
	

	public function agregarali_model($Tipo,$analisis_garantizado)
	{
		$ejecutar_consulta = $this->db->query("INSERT INTO alimento (id_alimento,Tipo,analisis_garantizado) VALUES ('$id_alimento' ,'$Tipo','$analisis_garantizado')");
		header("Location: Ali");
	}

	public function editarali_model($Tipo,$analisis_garantizado)
	{
		$ejecutar_consulta = $this->db->query("UPDATE alimento SET Tipo='$Tipo',Analisis_garantizado='$analisis_garantizado'");
		header("Location: Ali");
	}
public function agregareta_model($Etapa)
	{
		$ejecutar_consulta = $this->db->query("INSERT INTO etapa (Etapa) VALUES ('$id_etapa' ,'$Etapa')");
		header("Location: Eta");
	}
	
	public function editareta_model($Etapa)
	{
		$ejecutar_consulta = $this->db->query("UPDATE etapa SET Etapa='$Etapa'");
		header("Location: Eta");
	}
}