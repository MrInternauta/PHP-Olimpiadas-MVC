<?php
    require_once 'modelobase.php';
    class deporte extends ModeloBase {
        public $id_deporte;
        public $nombre;
        
        public function __construct(){
                    //herede la conexion a bd
                    parent::__construct();
        }
        public function Guardar(){
           $sql =  "INSERT INTO deportes  (id_deporte, nombre) values ('{$this->id_deporte}', '{$this->nombre}');";
           $guardado = $this->db->query($sql);
           return $guardado;
        }

        public function Modificar (){
         $sql =  "UPDATE deportes SET nombre = '{$this->nombre}' WHERE id_deporte = {$this->id_deporte};";
           $guardado = $this->db->query($sql);
           return $guardado;
        }


    }
?>