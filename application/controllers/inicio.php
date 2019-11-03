<?php 
	class Inicio extends CI_Controller {

		public function index () {
			$seccion = $this->load->view('consulta', '', true);
			$datos['contenido'] = $seccion;
			$this->load->view('invitados', $datos);


		}

		public function enlaces($seccion) {
			$datos['contenido'] = $this->load->view($seccion, '', true);
			$this->load->view('invitados', $datos);


		}

	}



 ?>