<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuario extends CI_Controller {
        
    function __construct(){
        parent :: __construct();
        $this->load->model('usuario_model');
    }

	public function approvedUser($user,$pass)
	{
        $usuario = $this->usuario_model->approvedUser($user,$pass);
        $datos =json_encode($usuario);
        if (count($datos)>1){
            print $datos;
            echo "[{confirm:true}]";
            return true;
        }else{
            print '[{confirm:false}]';
            return false;
        }
    }
    public function NewUser($name,$user,$pass)
    {
            
    }
}