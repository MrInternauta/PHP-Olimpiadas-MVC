<?php
    class Home extends {

        
        public function __construct(){
                    //herede la conexion a bd
                    parent::__construct();
        }
        // public function Guardar(){
        //    $sql =  "INSERT INTO notas  (usuario_id, titulo, descripcion, fecha) values ({$this->usuario_id}, '{$this->titulo}', '{$this->descripcion}', CURDATE());";
        //    $guardado = $this->db->query($sql);
        //    return $guardado;
        // }
    }
?>