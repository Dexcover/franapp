<?php 
/**
* 
*/
class Ccrearestudio extends CI_Controller
{
	function __construct()
 			{
 				parent::__construct();
 				//call data from model
			$this->load->model('Mcliente');
			$this->load->model('Mstudio');

 			}
	public function index(){
		$data['clientes']=verclientes();
		$data['tipos']=vertipos();

		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('vcrearestudio', $data);
		$this->load->view('layout/footer');
	}


	public function crearEstudio()
	{


	}

	public function verclientes()
		{
			
	  
		return $this->Mcliente->obtenerClientes();

		}

	public function vertipos()
	{

		return $this->Mstudio->getTipos();

	}



}
?>