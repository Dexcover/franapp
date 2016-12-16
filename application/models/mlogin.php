<?php 
/**
* 
*/
class Mlogin extends CI_Model
{
	
	
	public function ingresar($usu,$pass){
		$this->db->select('u.ID_USUARIO, u.NOMBRES, r.N_ROL');
		$this->db->from('USUARIOS u');
		$this->db->join('ROLES r', 'u.ID_ROL = r.ID_ROL');
		$this->db->where('ID_USUARIO',$usu);
		$this->db->where('CLAVE',md5($pass));
		$resultado = $this->db->get();

		if($resultado->num_rows() ==1){
			$r = $resultado->row();

			$s_usuario = array(
				's_IDUSUARIO' => $r->ID_USUARIO,
				's_NOMBRES' => $r->NOMBRES,
				's_IDROL'=> $r->N_ROL
				);

			$this->session->set_userdata($s_usuario);
			return 1;
		}else{
			return 0;
		}
		
	}

}