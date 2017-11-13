<?php
    class renta_model extends CI_Model{
        function __construct(){
            parent :: __construct();
            $this->load->database();
        }
        public function getRentas($id){
            $q = $this->db->query('SELECT * FROM renta where id_usuario="'.$id.'"');
            return $q->result();
        }
        public function crearVenta($id_pelicula,$id_usuario,$fecha){
            $q = $this->db->query('INSERT INTO `renta`(`id_pelicula`, `id_usuario`, `fechaInicio`, `estado`) VALUES ('.$id_pelicula.','.$id_usuario.','.$fecha.',1)');
            return $q->result();
        }
    }