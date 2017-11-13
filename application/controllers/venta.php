<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class venta extends CI_Controller {
    
    function __construct(){
        parent :: __construct();
        $this->load->model('venta_model');
    }
    public function getVentas($id)
    {
        $ventas = $this->venta_model->getVentas($id);
        echo json_encode($ventas);
    }
    public function crearVenta($id_pelicula,$id_usuario){
        $date = getdate();
        $fecha = $date[year].'/'.$date[mon].'/'.$date[mday];
        $this->ventas_model->crearVenta($id_pelicula,$id_usuario);
    }
	
}