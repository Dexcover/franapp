<?php 
/**
* 
*/
class Ccrearcliente extends CI_Controller
{
	
		function __construct()
 			{
 				parent::__construct();
 				
 			}
	
	
	public function index(){
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('vcrearcliente');
		$this->load->view('layout/footer');
	}



public function crearcliente()
		{

			//call to varibales in the view
			$id_cliente=$_POST['cliente'];
			$id_usuario=$this->session->userdata('s_idUsuario');
			$n_cliente=$_POST['nombre'];
			$ruc=$_POST['ruc'];

			//do query
			$this->Mcliente->crearCliente($id_cliente,$id_usuario,$n_cliente,$ruc);

		}

		public function verclientes()
		{

			//call data from model
			$data['clientes']=$this->Mcliente->obtenerClientes();
			$this->load->view('', $data);

		}
	
}
?>