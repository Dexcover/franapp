<?php 

	class Mstudio extends CI_Model
	{

		public function getTipos()
		{

			$query = $this->db->get('TIPO');
	        return $query->result_array();

		}

	}

 ?>