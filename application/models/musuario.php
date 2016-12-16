<?php 

		class Musuario extends CI_Model
		{


			public function crearUsuario($id_usuario,$id_rol,$nombres,$clave)
			{

				
				 $data = array('ID_USUARIO' => $id_usuario,
				 	'ID_ROL'=>$id_rol,
				 	'NOMBRES'=>$nombres,
				 	'CLAVE'=>$clave
				  );

				 $this->db->insert('USUARIOS', $data);

			}

			public function existeUsuario($id_usuario)
			{

				$this->db->select('ID_USUARIO');
				$this->db->from('USUARIOS');
				$this->db->where('ID_USUARIO',$id_usuario);
				$resultado = $this->db->get();
				if($resultado->num_rows()==1)
				{
					return  true;
				}else
				{
					return false;
				}


			}

		}


 ?>