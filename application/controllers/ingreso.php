<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ingreso extends Private_Controller {

	public function index() {
		/*
			Si no esta logueado lo redirigmos al formulario de login.
		*/
		if(!@$this->user) redirect ('ingreso/login');

		$this->load->view('index');
	}

	public function login() {

		$data = array();

		// Añadimos las reglas necesarias.
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		// Generamos el mensaje de error personalizado para la accion 'required'
		$this->form_validation->set_message('required', 'El campo %s es requerido.');

		// Si no esta vacio $_POST
		if(!empty($_POST)) {
			// Si las reglas se cumplen, entramos a la condicion.
			if ($this->form_validation->run() == TRUE) {

				// Obtenemos la informacion del usuario desde el modelo users.
				$logged_user = $this->users->get($_POST['username'], $_POST['password']);

				// Si existe el usuario creamos la sesion y redirigimos al index.
				if($logged_user) {
					$this->session->set_userdata('logged_user', $logged_user);
					redirect('ingreso/index');
				} else {
					// De lo contrario se activa el error_login.
					$data['error_login'] = TRUE;
				}
			}
		}

		$this->load->view('login', $data);
	}

	public function logout() {
		$this->session->unset_userdata('logged_user');
		redirect('ingreso/index');
	}
}

/* End of file ingreso.php */
/* Location: ./application/controllers/ingreso.php */