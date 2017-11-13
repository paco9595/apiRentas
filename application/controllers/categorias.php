<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class categorias extends CI_Controller {
    
    function __construct(){
        parent :: __construct();
        $this->load->model('categorias_model');
    }
    public function getCategorias()
    {
        $categorias = $this->categorias_model->getCategorais();
        echo json_encode($categorias);
    }
	
}