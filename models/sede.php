<?php
    require_once 'modelobase.php';
    class Sede extends ModeloBase {
        public $id_sede;
        public $nombre_sede;
        public $capacidad;
        public $ubicacion;
        public $ciudad;
        public $id_juegos;
        
        public function __construct(){
                    //herede la conexion a bd
                    parent::__construct();
        }
        public function Guardar(){
           $sql =  "INSERT INTO sedes  (id_sede,
                                            nombre_sede,
                                            capacidad,
                                            ubicacion,
                                            ciudad,
                                            id_juegos) values 
                ({$this->id_sede}, '{$this->nombre_sede}',
                {$this->capacidad}, '{$this->ubicacion}',
                '{$this->ciudad}', {$this->id_juegos}
                );";
           $guardado = $this->db->query($sql);
           return $guardado;
        }
    }
?>