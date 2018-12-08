<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imagen_model extends CI_Model
{
	
	public function subir($imagen){

		$data=array(
			'nombre' =>$imagen, 
			
			
				);
		$this->db->update('imagene', $data);
			}
}
