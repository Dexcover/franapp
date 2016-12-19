<?php 
/**
 * 
 */
 class Clogin extends CI_Controller
 {
 		
 			function __construct()
 			{
 				parent::__construct();
 				$this->load->model('mlogin');
 			}
 		
 	
 	public function index()
	{
		if(empty($this->session->userdata('s_IDUSUARIO')))
		{
		$data['mensaje']="";
		$this->load->view('login/vlogin',$data);
		}else
		{

			/*
			llamo a modelo de cliente, alamceno la id de usuario para encontrar los clientes
			registrados con su usuario.
			 */
			$this->load->model('Mcliente');
			$id_usuario=$this->session->userdata('s_IDUSUARIO');
			$data['clientes']=$this->Mcliente->obtenerClientes($id_usuario);
			$this->load->view('layout/header');
			$this->load->view('layout/menu');
			$this->load->view('vcrearcliente',$data);
			$this->load->view('layout/footer');




		}
	}
	public function ingresar(){
		$usu = $this->input->post('txtuser');
		$pass = $this->input->post('txtpass');

		$res = $this->mlogin->ingresar($usu,$pass);

		if($res==1){
			/*
			llamo a modelo de cliente, alamceno la id de usuario para encontrar los clientes
			registrados con su usuario.
			 */
			$this->load->model('Mcliente');
			$id_usuario=$this->session->userdata('s_IDUSUARIO');
			$data['clientes']=$this->Mcliente->obtenerClientes($id_usuario);
			$this->load->view('layout/header');
			$this->load->view('layout/menu');
			$this->load->view('vcrearcliente',$data);
			$this->load->view('layout/footer');
			
			}else{
			$data['mensaje']="Usuario o contraseña incorrecta.";
			$this->load->view('login/vlogin',$data);
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		header("Location:" . base_url());
	}
}
