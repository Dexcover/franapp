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
			$this->load->model('Mtipo');
			//lamo al modelo de estudio
			$this->load->model('Mstudio');
 			}

 			
	public function index(){
		$data['clientes']=$this->verclientes();
		$data['tipos']=$this->vertipos();
		$data['estudios']=$this->Mstudio->estudios($this->session->userdata('s_IDUSUARIO'));
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('vcrearestudio', $data);
		$this->load->view('layout/footer');
	}


	public function crearEstudio()
	{
		$id_usuario=$this->session->userdata('s_ID_USUARIO');
		$id_source=$_POST[''];
		$id_cliente=$_POST[''];
		$id_tipo=$_POST[''];
		$num_com=$_POST[''];
		$fiscalyear=$_POST[''];
		$fecha_ini=$_POST[''];
		$fecha_fin=$_POST[''];
		$anio_estudio=$_POST[''];

		
		$this->Mstudio->crearEstudio($id_usuario,$id_source,$id_cliente,$id_tipo,$num_com,$fiscalyear,$fecha_ini,$fecha_fin,$anio_estudio);

		$data['mensaje']='Estudio ingresado correctamente';
		$data['clientes']=$this->verclientes();
		$data['tipos']=$this->vertipos();
		$data['estudios']=$this->estudios($id_usuario);
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('vcrearestudio', $data);
		$this->load->view('layout/footer');



	}

	public function verclientes()
		{
			
	  	$id_usuario=$this->session->userdata('s_IDUSUARIO');
		return $this->Mcliente->obtenerClientes($id_usuario);

		}

	public function vertipos()
	{

		return $this->Mtipo->getTipos();

	}





}
?>