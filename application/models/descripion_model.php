<?php
    class descripcion_model extends CI_Model{
        function __construct(){
            parent :: __construct();
            $this->load->database();
        }
        public function approvedUser($user,$pass){
            $q = $this->db->query('SELECT * FROM usuario where user="'.$user.'" and password="'.$pass.'"');
            return $q->result();
        }
    }