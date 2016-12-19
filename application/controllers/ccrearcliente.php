<?php 
/**
* 
*/
class Ccrearcliente extends CI_Controller
{

	private $id_usuario;
	
		function __construct()
 			{
 				parent::__construct();
 				//llamo al modelo para crear cliente
				$this->load->model('Mcliente');
				
 			}
	
	
	public function index(){

		
		$id_usuario=$this->session->userdata('s_IDUSUARIO');
		$data['clientes']=$this->Mcliente->obtenerClientes($id_usuario);

			$this->load->view('layout/header');
			$this->load->view('layout/menu');
			$this->load->view('vcrearcliente',$data);
			$this->load->view('layout/footer');

	}



public function crearcliente()

		{	
			//call to varibales in the view
			
			$id_usuario=$this->session->userdata('s_IDUSUARIO');
			$n_cliente=$_POST['nombre_cliente'];
			$ruc=$_POST['ruc'];

			//do query
			$this->Mcliente->crearCliente($id_usuario,$n_cliente,$ruc);
			$data['mensaje']="Cliente Registrado.!";
			$data['clientes']=$this->Mcliente->obtenerClientes($id_usuario);
			$this->load->view('layout/header');
			$this->load->view('layout/menu');
			$this->load->view('vcrearcliente',$data);
			$this->load->view('layout/footer');

		}

		public function verclientes()
		{
			$id_usuario=$this->session->userdata('s_IDUSUARIO');

			//call data from model
			$data['clientes']=$this->Mcliente->obtenerClientes($id_usuario);

			$this->load->view('layout/header');
			$this->load->view('layout/menu');
			$this->load->view('vcrearcliente',$data);
			$this->load->view('layout/footer');
			



		}

}
?>