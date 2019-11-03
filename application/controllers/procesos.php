<?php 
	class Procesos extends CI_Controller {

		public function consulta() {

			//petición al modelo para consultar los invitados
			$invitados = $this->Invitados->consulta();
			//traducir el array de respuesta a json
			//enviar el JSON a la vista
			echo json_encode($invitados);
		}

		public function alta() {
			//recuperar los datos del formulario
			$nif = $this->input->post('nif');
			$nombre = $this->input->post('nombre');  
			$apellidos = $this->input->post('apellidos'); 

			//validar si datos informados
			if (empty($nif) || empty($nombre) || empty($apellidos)) {
				$codigo['code']='11';
				$codigo['message'] = "todos los datos son obligatorios";
				$respuesta = $codigo;
			} else {
				$alta = array ('nif'=>$nif, 'nombre'=>$nombre, 'apellidos'=>$apellidos);
				//solicitud creación alta invitado
				$respuesta = $this->Invitados->alta($alta);
				
			}
			echo json_encode($respuesta);


		}

		public function baja() {
			//recuperar los datos del formulario
			$id = $this->input->post('idinvitado');
			
			//validar si datos informados
			if (empty($id)) {
				$codigo['code']='11';
				$codigo['message'] = "no disponible el id del invitado, revisar ";
				$respuesta = $codigo;
			} else {
				$datos = array ('idinvitado'=> $id);
				//solicitud creación alta invitado
				$respuesta = $this->Invitados->baja($datos);
				
			}
			echo json_encode($respuesta);


		}

	}






?>