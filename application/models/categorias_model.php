<?php
    class categorias_model extends CI_Model{
        function __construct(){
            parent :: __construct();
            $this->load->database();
        }
        public function getCategorais(){
            $q = $this->db->query('SELECT * FROM categorias');
            return $q->result();
        }
    }