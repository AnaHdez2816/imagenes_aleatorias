<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imagen_Controller extends CI_Controller {

	public function index()
	{
		$this->load->model("Imagen_model");
	}


	public function subirimagen(){

			$config['upload_path'] = './img/subidas';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '2048';
			$config['max_width'] = '2024';
			$config['max_height'] = '2008';

			$this->load->library('upload', $config);
			//Aquí se muestra si ha habido un error al momento de insertar los datos de el formulario de configuración a la base de datos.

			if (!$this->upload->do_upload("imagen")) {
				$data['error'] = "<center class='alert alert-danger'> Error no se han podido instalar los datos </center>";//$this->upload->display_errors();
				//$data['ver']= $this->Config_model->ver_config();
				$this->load->view("layouts/header");
				$this->load->view("layouts/aside", $data);
				$this->load->view("root&admin/insert/configInic_view", $data);
				$this->load->view("layouts/footer");
				# code...
			}else{

				$info = $this->upload->data();

				//$info['file_name'] = $_POST['nombre del post'];

				$this->crearMiniatura($info['file_name']);


				//En ésta parte se incertan los datos del formulario de configuración.
				//$titulo =chr(rand(65,90)).chr(rand(65,90)).chr(rand(65,90)).chr(rand(65,90)).chr(rand(65,90));
				$imagen= $info['file_name'];
				$ins= $_POST['inst'];
    			$tipo= $_POST['tipo'];
    			$rubro= $_POST['rubu'];

 //$camposEsp['especialidad'] = $_POST['especialidad'];	
			$this->Config_model->subir($imagen, $ins, $tipo, $rubro);


$data['error'] = "<center class='alert alert-warning'> Felicidades se ha instalado su configuracion </center>";
$data['ver']= $this->Config_model->ver_config();
				$this->load->view('layouts/header');
				$this->load->view('layouts/aside', $data);
				$this->load->view('root&admin/insert/configInic_view', $data);
				$this->load->view('layouts/footer');
			}

		}

}
