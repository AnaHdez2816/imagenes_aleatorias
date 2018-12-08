<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imagen_model extends CI_Model
{
	 public function obtener_imagenes($id)
    {
        /*$imagen=$this->db->get('imagenes');
        return $imagen->result_array();*/

        $this->db->select('*');
        $this->db->from('imagenes');
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->result();
    }

	public function subir($imagen){
		$this->db->set('nombre',$imagen);
		
		$this->db->insert('imagenes');

		
	}

	//obtiene el maximo numero de la tabla
	public function maximo()
	{
		return $this->db->count_all('imagenes');
	}

	public function where_($id){
		return $this->db->where('id',$id)->get('imagenes')->result_array();
	}

}
