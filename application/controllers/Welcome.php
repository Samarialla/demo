<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		$this->load->model('welcome_m');
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
	/**
	 * funcion que guarda el formulario de contactos en la base de datos
	 * 
	 */

	public function guardar()
	{
		$nombre =	$this->input->post('nombre');
		$apellido =	$this->input->post('apellido');
		$email =	$this->input->post('email');
		$comentario =	$this->input->post('comentarios');
		$data = array(
			'contacto_nombre' => $nombre,
			'contacto_apellido' => $apellido,
			'contacto_email' => $email,
			'contacto_comentarios' => $comentario
		);
		$resultado = $this->welcome_m->guardar($data);
		$this->enviar_email($nombre,$apellido,$email,$comentario);
		if ($resultado) {
			
			$v_data['resultado'] = true;
			$v_data['mensaje'] = 'Se guardo con exito en la base de datos.';
		} else {
			$v_data['mensaje'] = 'No se pudo guardar, revise errores de validaci&oacute;n';
			$v_data['resultado'] = false;
		}
		echo json_encode($v_data);
	}

	public function enviar_email($nombre=null,$apellido= null,$email=null, $comentarios= null)
	{
		$this->load->library("email");
		$this->email->initialize();
		$this->email->from('noresponder@gmail.com', 'No responder');
				
		$this->email->to('sergojavier23@gmail.com', 'DEMO'); // Usuario prueba
		$this->email->cc('ivangarcete@gmail.com', 'DEMO'); // Usuario prueba
		$this->email->subject('DEMO | DEMO');
		/**
		 *   Formato de correo
		 */
		$msg = NULL;
		$msg .= '<style rel="stylesheet" type="text/css">
                body{
                    font-family: "Segoe UI",Arial,sans-serif;
                    font-weight: 400;
					margin: 10px 0;font-size: 13px;
					border-style: dotted;
                }
                p.justify{text-align: justify}
                a.btnplayit{
                    //background-color: #FFAD33;
                    color: #6192e8;
                    //padding: 1px 10px 2px 10px;
                }
                </style>';
		$msg .= "<html>
                <head>
                    <title></title>
                </head>";
		$msg .= '<body>';
		$msg .= '<p class="justify">El cliente <strong>' . $nombre . ' '.$apellido.'</strong> ha enviado un mensaje para contactarse con el por medio de su email <br>';
		$msg .= '<strong>' . $email . '.</strong></p> <br><br>';
		$msg .= '<p class="justify"> La misma deja un comentario' . $comentarios . '</p>';
		$msg .= '</p><br>';
		$msg .= '</body>';
		$msg .= '</html>';
		$this->email->message($msg);

		$this->email->send();
		//var_dump(($this->email->print_debugger()));
	}
}
