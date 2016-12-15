<?php 
/**
* 
*/
class Mlogin extends CI_Model
{
	
	
	public function ingresar($usu,$pass){
		$this->db->select('u.idUsuario, p.nombre, p.appaterno, p.apmaterno');
		$this->db->from('usuario u');
		$this->db->join('persona p','p.idpersona = u.idpersona');
		$this->db->where('u.nombreUsuario',$usu);
		$this->db->where('u.clave',$pass);

		$resultado = $this->db->get();

		if($resultado->num_rows() ==1){
			$r = $resultado->row();

			$s_usuario = array(
				's_idUsuario' => $r->idUsuario,
				's_usuario' => $r->nombre.", ".$r->appaterno
				);

			$this->session->set_userdata($s_usuario);
			return 1;
		}else{
			return 0;
		}
		
	}
}