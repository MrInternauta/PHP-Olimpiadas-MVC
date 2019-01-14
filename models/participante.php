<?php
    require_once 'modelobase.php';
    class Participante extends ModeloBase {
        public $id_participante;
        public $nombre;
        public $id_pais;
        public $record;
        public $fecha_nac;
        public $descripcion = 0;
        
        public function __construct(){
                    //herede la conexion a bd
                    parent::__construct();
        }
        public function Guardar(){
           $sql =  "INSERT INTO participantes  (id_participante,
                                                nombre,
                                                id_pais,
                                                record,
                                                fecha_nac,
                                                descripcion) values 
                ({$this->id_participante}, '{$this->nombre}',
                {$this->id_pais}, {$this->record},
                CURDATE(), '{$this->descripcion}'
                );";
           $guardado = $this->db->query($sql);
           return $guardado;
        }
    }
?>