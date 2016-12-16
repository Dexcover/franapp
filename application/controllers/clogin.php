<?php 
/**
 * 
 */
 class Clogin extends CI_Controller
 {
 		
 			function __construct()
 			{
 				parent::__construct();
<<<<<<< Updated upstream

 				
=======
 				$this->load->model('mlogin');
>>>>>>> Stashed changes
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


	public function iniciar(){

		//Instancios el modelo del login
		$this->load->model('Mlogin');
		//Llamo a las variables desde el login
			$usuario=$_POST['usuario']; 
			$password=$_POST['password'];
		//asigno el resultado a la variable del metodo ingresar en el modelo.

		    $var=$this->Mlogin->ingresar($usuario, $password);

		//estructura if para comprobar si existe el usuario

            if ($var==1)
            {

            //redireccionar cuando sea correcto
            	
           	$this->load->view('login/vlogin');
            
            }
            else
            {

            //envio el error hacia la vista
            $data['info']='Verifique sus credenciales!';	
           	$this->load->view('login/vlogin', $data);

            }
		
		
	}
}
