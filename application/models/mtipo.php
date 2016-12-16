<?php 

	class Mtipo extends CI_Model
	{

		public function getTipos()
		{

			$query = $this->db->get('TIPO');
	        return $query->result_array();

		}

	}

 ?>