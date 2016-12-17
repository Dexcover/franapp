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
			$this->db->where('ID_USUARIO',$id_usuario);
			$query = $this->db->get('ACTORES');
	        return $query->result_array();

		}


	}



?>