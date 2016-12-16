<?php 

class Mstudio extends CI_Model
{

public function crearEstudio($id_usuario,$id_source,$id_cliente,$id_tipo,$num_com,$fiscalyear,$fecha_ini,$fecha_fin,$anio_estudio){

	$data = array(
		'ID_ESTUDIO' => $id_usuario,
		'ID_ESTUDIO' => $id_source,
		'ID_ESTUDIO' => $id_cliente,
		'ID_ESTUDIO' => $id_tipo,
		'ID_ESTUDIO' => $num_com,
		'ID_ESTUDIO' => $fiscalyear,
		'ID_ESTUDIO' => $fecha_ini,
		'ID_ESTUDIO' => $fecha_fin,
		'ID_ESTUDIO' => $anio_estudio
		);
	$this->db->insert('estudio',$data);


		}

	public function estudios($id_usuario)
	{
		if($id_usuario==1)
		{

		$query=$this->db->get('estudio');
		return $query->result_array();
		}else{

		$this->db->where('ID_USUARIO', $id_usuario);

		$query=$this->db->get('estudio');
		return $query->result_array();

		}




	}

}



 ?>