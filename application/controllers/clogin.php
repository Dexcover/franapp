<?php 
/**
 * 
 */
 class Clogin extends CI_Controller
 {
 		
 			function __construct()
 			{
 				parent::__construct();

 				
 			}
 		
 	
 	public function index()
	{
		
		$this->load->view('login/vlogin');
		
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
