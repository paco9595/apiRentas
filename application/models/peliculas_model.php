<?php
    class peliculas_model extends CI_Model{
        function __construct(){
            parent :: __construct();
            $this->load->database();
        }
        public function getPeliculas(){
            $q = $this->db->query('SELECT * FROM pelicula');
            return $q->result();
        }
    }