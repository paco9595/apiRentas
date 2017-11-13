<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class peliculas extends CI_Controller {
    
    function __construct(){
        parent :: __construct();
        $this->load->model('peliculas_model');
    }
    public function getPeliculas()
    {
        $peliculas = $this->peliculas_model->getPeliculas();
        echo json_encode($peliculas);
    }
	
}