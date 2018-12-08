<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imagen_Controller extends CI_Controller {

	public function __construct()
    {
       parent::__construct(); 
       $this->load->model('Imagen_model'); 
    }
	
	public function index()
	{
		
	}
}
