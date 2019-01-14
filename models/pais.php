<?php
    require_once 'modelobase.php';
    class Pais extends ModeloBase {
        public $id_pais;
        public $nombres;
        public $num_participantes;
        
        public function __construct(){
                    //herede la conexion a bd
                    parent::__construct();
        }
        
        public function Guardar(){
           $sql =  "INSERT INTO pais  (id_pais, nombre, n_competidores) values ({$this->id_pais}, '{$this->nombres}', {$this->num_participantes});";
           $guardado = $this->db->query($sql);
           return $guardado;
        }





    public function Modificar (){
         $sql =  "UPDATE pais SET nombre = '{$this->nombres}', n_competidores = {$this->num_participantes} WHERE id_pais = {$this->id_pais};";
           $guardado = $this->db->query($sql);
           return $guardado;
    }

    }
?>