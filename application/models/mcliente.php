<?php 


	class Mcliente extends CI_Model
	{

		public function crearCliente($id_usuario, $n_cliente, $ruc){

			$data=array(
				


				'ID_USUARIO'=>$id_usuario,
				'N_CLIENTE'=>$n_cliente,
				'RUC'=>$ruc
			);

			$this->db->insert('ACTORES',$data);

		}

		public function obtenerClientes($id_usuario)
		{
			if($id_usuario==1)
		{
			$this->db->select('ID_CLIENTE ,N_CLIENTE, RUC, NOMBRES');
			$this->db->from('ACTORES');
			$this->db->join('USUARIOS','ACTORES.ID_USUARIO=USUARIOS.ID_USUARIO');
			
			$query = $this->db->get();
	        return $query->result_array();
			
	     }else
	     {

	     	$this->db->select('ID_CLIENTE ,N_CLIENTE, RUC, NOMBRES');
			$this->db->from('ACTORES');
			$this->db->join('USUARIOS','ACTORES.ID_USUARIO=USUARIOS.ID_USUARIO');
			$this->db->where('ACTORES.ID_USUARIO',$id_usuario);
			$query = $this->db->get();
	        return $query->result_array();

	     }
		}


	}



?>