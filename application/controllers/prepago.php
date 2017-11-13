<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class prepago extends CI_Controller {
    
    function __construct(){
        parent :: __construct();
        $this->load->model('prepago_model');
    }
}