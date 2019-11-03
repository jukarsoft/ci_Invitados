<?php 

	class Invitados extends CI_Model {
		// consulta
		public function consulta() {
			$sql="SELECT * FROM invitados ORDER BY nombre";
			$resultado = $this->db->query($sql);
			return $resultado->result_array();

		}
		// alta
		public function alta($alta) {
			//insertar los datos
			$this->db->insert('Invitados', $alta);
			
			//control del error
			$error = $this->db->error();
			if ($error['code']!=0) {	
				if ($error['code']==1062) { 
					return 'invitado ya existe'; 
				} else { 
					$error['code'].' '.$error['message'];
					return $error;
					
				}
			} 

			//recuperar el id del invitado insertado
			$id = $this->db->insert_id();

			//respuesta del modelo
			$codigo['code']="00";
			$codigo['message']="alta invitado efectuada con id: $id ";
			//$codigo['code'].' '.$codigo['message'];
			return $codigo['code'].' '.$codigo['message'];

		}

		// baja
		public function baja($id) {
			if (!$id) {
				$codigo['code']="1064";
				$codigo['message']="id invitado no recibido o error en sintasis del sql. idinvitado: $id";
				return $codigo['code'].' '.$codigo['message'];
			}
			//$this->db->delete('libros', array('idlibros' => $id));
			$sql="DELETE FROM invitados WHERE idinvitado = $id";
			$this->db->query($sql);	
				
			//control del error
			$error = $this->db->error();
			if ($error['code']!=0) {	
				return $error['code'].' '.$error['message'];
			}

			$codigo['code']="00";
			$codigo['message']="baja efectuada ";
			//$codigo['code'].' '.$codigo['message'];
			return $codigo['code'].' '.$codigo['message'];
		}

	}


?>