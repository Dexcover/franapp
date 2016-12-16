<?php 

class Cusuario extends CI_Controller
{


	function __construct()
	{
 	
			parent:: __construct();
			//llamo al modelo para crear usuario
			$this->load->model('Musuario');
	}

	public function crearUsuario()
	{

		//llamo  a las variables de la vista
		$id_usuario=$_POST['cedula'];
		$id_rol=$_POST['rol'];
		$nombres=$_POST['nombres'];
		$clave=md5($_POST['clave']);
		
		if($this->Musuario->existeUsuario($id_usuario))
		{
			$this->Musuario->crearUsuario($id_usuario,$id_rol,$nombres,$clave);

		$data['info']='Usuario registrado correctamente';
		}
		else
		{
		$data['info']='Usuario ya existe en la base de datos';
		}

		//mando el mensaje a la vista

	}


	public function modificaUsuario()
	{
		
					
	}




}

 ?>