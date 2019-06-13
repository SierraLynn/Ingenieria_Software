<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	public function __construct()
	{	
		parent::__construct();
		$this->load->model('Administrador');
		$this->load->database('default');
		 $this->load->helper('form');
   $this->load->library('form_validation'); 
   $this->load->library('session'); 
   $this->load->model('Login_model');
	}


	public function  Log()
	{
		$this->load->view('LOGIN/index');
	}
	public function  menu()
	{
		$this->load->view('menu/index');
	}
	public function alimento()
	{
		$id_alimento = $this->input->post('id_alimento');
		$Tipo = $this->input->post('Tipo');
		$analisis_garantizado = $this->input->post('analisis_garantizado');
		$guardar_datos = $this->Administrador->alimento_model($id_alimento,$Tipo,$analisis_garantizado);
	}
	public function  Ali()
	{
		$this->load->view('alimento');
	}

	public function  Cas()
	{
		$this->load->view('casetas');
	}
public function casetas()
	{
		$id_caseta = $this->input->post('id_caseta');
		$Numero = $this->input->post('Numero');
		$Peso = $this->input->post('Peso');
		$Fecha_llegada = $this->input->post('Fecha_llegada');
		$id_alimento = $this->input->post('id_alimento');
		$id_etapa = $this->input->post('id_etapa');
		$guardar_datos = $this->Administrador->caseta_model($id_caseta,$Numero,$Peso,$Fecha_llegada,$id_alimento,$id_etapa);
	}

	public function  Eta()
	{
		$this->load->view('etapa');
	}

    public function etapa()
	{
		$id_caseta = $this->input->post('id_etapa');
		$Numero = $this->input->post('Etapa');
		$guardar_datos = $this->Administrador->etapa_model($id_etapa,$Etapa);
	}
public function  carrusel()
	{
		$this->load->view('carrusel');
	}
public function agreCas()
	{
		$this->load->view('agregarcas');
	}

	public function agregarcas()
	{
		$id_caseta = $this->input->post('id_caseta');
		$Numero = $this->input->post('Numero');
		$Peso = $this->input->post('Peso');
		$Fecha_llegada = $this->input->post('Fecha_llegada');
		$id_alimento = $this->input->post('id_alimento');
		$id_etapa = $this->input->post('id_etapa');
		$guardar_datos = $this->Administrador->agregarcas_model($Numero,$Peso,$Fecha_llegada,$id_alimento,$id_etapa);
	}

	public function editCas()
	{
		$this->load->view('editarcas');
	}

	public function editarcas()
	{
	    $id_caseta = $this->input->post('id_caseta');
		$Numero = $this->input->post('Numero');
		$Peso = $this->input->post('Peso');
		$Fecha_llegada = $this->input->post('Fecha_llegada');
		$id_alimento = $this->input->post('id_alimento');
		$id_etapa = $this->input->post('id_etapa');
		$guardar_datos = $this->Administrador->editarcas_model($id_caseta,$Numero,$Peso,$Fecha_llegada,$id_alimento,$id_etapa);
	}

	public function agreAli()
	{
		$this->load->view('agregarali');
	}

	public function agregarali()
	{
		$id_alimento = $this->input->post('id_alimento');
		$Tipo = $this->input->post('Tipo');
		$analisis_garantizado = $this->input->post('analisis_garantizado');
		$guardar_datos = $this->Administrador->agregarali_model($id_alimento,$Tipo,$analisis_garantizado);
	}


	public function editAli()
	{
		$this->load->view('editarali');
	}

	public function editarali()
	{
		$id_alimento = $this->input->post('id_alimento');
		$Tipo = $this->input->post('Tipo');
		$analisis_garantizado = $this->input->post('analisis_garantizado');
		$guardar_datos = $this->Administrador->editarali_model($id_alimento,$Tipo,$analisis_garantizado);
	}
	public function agreEta()
	{
		$this->load->view('agregareta');
	}

	public function agregareta()
	{
		$id_alimento = $this->input->post('id_etapa');
		$Tipo = $this->input->post('Etapa');
		$guardar_datos = $this->Administrador->agregareta_model($id_etapa,$Etapa);
	}

	public function editEta()
	{
		$this->load->view('editareta');
	}

	public function editareta()
	{
		$id_alimento = $this->input->post('id_etapa');
		$Tipo = $this->input->post('Etapa');
		$guardar_datos = $this->Administrador->editareta_model($id_etapa,$Etapa);
	}

	

 function index(){
     $this->load->helper(array('form'));
    $this->load->view('login_view');
 }
  

public function user_login_process() {
			
      
        $this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');        
        if ($this->form_validation->run() == FALSE) {
			
            if(isset($this->session->userdata['logged_in'])){	
            	$this->load->view('menu/index'); 
               
            }else{
				
                $this->load->view('login_view');                
            }
			
        }else{
			
				
                $data = array(    'username' => $this->input->post('username'),
                                'password' => md5($this->input->post('password')));
                

                $result = $this->Login_model->login($data);            			
				
                if ($result == TRUE) {                
			
                    $username = $this->input->post('username');
                    
                    $result = $this->Login_model->read_user_information($username);
                
                    if ($result != false) {
                        $session_data = array(
                                                
                                                'username' => $result[0]->username,
                                                'iduser'=> $result[0]->id,
                                        );                                        
                        
                        $this->session->set_userdata('logged_in', $session_data);
                        $this->load->view('menu/index');                        
                       
                    }
                }else{
                    $data = array('error_message' => 'Usuario o Password No válidos.');
                    $this->load->view('login_view', $data);
                }
        }
    }
   public function logout() {
    
        
        $sess_array = array(
        'username' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $this->load->view('login_view');
     }
}
