<?php
    class venta_model extends CI_Model{
        function __construct(){
            parent :: __construct();
            $this->load->database();
        }
        public function getVentas($id){
            $q = $this->db->query('SELECT * FROM venta where id_usuario="'.$id.'"');
            return $q->result();
        }
        public function crearVenta($id_pelicula,$id_usuario){
            $q = $this->db->query('INSERT INTO `venta`(`id_pelicula`, `id_usuario`) VALUES ('.$id_pelicula.','.$id_usuario.')');
            return $q->result();
        }            
    }