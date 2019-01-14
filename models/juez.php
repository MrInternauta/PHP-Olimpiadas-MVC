<?php
    require_once 'modelobase.php';
    class Juez extends ModeloBase {
        public $id_juez;
        public $nombre;
        public $id_deporte;
        public $id_pais;

        
        public function __construct(){
                    //herede la conexion a bd
                    parent::__construct();
        }
        public function Guardar(){
           $sql =  "INSERT INTO jueces  (id_juez,
                                            nombre,
                                            id_deporte,
                                            id_pais
                                            ) values 
                ({$this->id_juez}, '{$this->nombre}',
                {$this->id_deporte}, {$this->id_pais}
                );";
           $guardado = $this->db->query($sql);
           return $guardado;
        }
    }
?>