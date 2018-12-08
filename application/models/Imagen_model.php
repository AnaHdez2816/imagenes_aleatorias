<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imagen_model extends CI_Model
{
	
	public function subir($imagen){
		$this->db->set('nombre',$imagen);
		
		$this->db->insert('imagenes');
			}
}
