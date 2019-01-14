<?php
    require_once 'modelobase.php';
    class Juego extends ModeloBase {
        public $id_juegos;
        public $nombre;
        
        public function __construct(){
                    //herede la conexion a bd
                    parent::__construct();
        }
        public function Guardar(){
           $sql =  "INSERT INTO juegos_olimpicos  (id_juegos, nombre) values ({$this->id_juegos}, '{$this->nombre}');";
           $guardado = $this->db->query($sql);
           return $guardado;
        }
    }
?>