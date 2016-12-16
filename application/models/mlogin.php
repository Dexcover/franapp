<?php 
/**
* 
*/
class Mlogin extends CI_Model
{
	
	
	public function ingresar($usu,$pass){
		
		//Realizo la consulta hacia la base
		$this->db->select('id_usuario,nombres,id_rol,clave');
		$this->db->from('usuarios');
		$this->db->where('id_usuario',$usu);
		$this->db->where('clave',md5($pass));

		//guardo la consulta 
		$resultado = $this->db->get();

		//compruebo si hubo resultados
		if($resultado->num_rows() ==1){
			$r = $resultado->row();

			$s_usuario = array(
				's_idUsuario' => $r->id_usuario,
				's_nUsuario' => $r->nombres,
				's_idRol' => $r ->id_rol
				);
			
			//referencio la libreria de sesion
			$this->load->library('session');

			//guardo el inicio de sesion
			$this->session->set_userdata($s_usuario);

			//retorno 1 de exitoso logeo
			return 1;
		}else{

			//retorno 0 failed login
			return 0;
		}
		
	}
}