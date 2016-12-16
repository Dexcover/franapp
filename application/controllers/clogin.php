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
		$data['mensaje']="";
		$this->load->view('login/vlogin',$data);
		
	}
	public function ingresar(){
		$usu = $this->input->post('txtuser');
		$pass = $this->input->post('txtpass');

		$res = $this->mlogin->ingresar($usu,$pass);

		if($res==1){
			$this->load->view('layout/header');
			$this->load->view('layout/menu');
			$this->load->view('vcrearcliente');
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
