<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class renta extends CI_Controller {
    
    function __construct(){
        parent :: __construct();
        $this->load->model('renta_model');
    }
    public function getRentas($id)
    {
        $rentas = $this->renta_model->getRentas($id);
        echo json_encode($rentas);
    }
	public function crearRenta($id_pelicula,$id_usuario){
        $date = getdate();
        $fecha = $date[year].'/'.$date[mon].'/'.$date[mday];
        $this->renta_model->crearRenta($id_pelicula,$id_usuario,$fecha);
    }
}