<?php 
/**
* 
*/
class Mlogin extends CI_Model
{
	
	
	public function ingresar($usu,$pass){
		$this->db->select('ID_USUARIO, NOMBRES, ROL, NOMBREUSUARIO');
		$this->db->from('usuarios');
		$this->db->where('NOMBREUSUARIO',$usu);
		$this->db->where('CLAVE',$pass);
		$resultado = $this->db->get();

		if($resultado->num_rows() ==1){
			$r = $resultado->row();

			$s_usuario = array(
				's_IDUSUARIO' => $r->ID_USUARIO,
				's_NOMBRES' => $r->NOMBRES,
				's_ROL'=> $r->ROL,
				's_NOMBREUSUARIO'=> $r->NOMBREUSUARIO
				);

			$this->session->set_userdata($s_usuario);
			return 1;
		}else{
			return 0;
		}
		
	}

}