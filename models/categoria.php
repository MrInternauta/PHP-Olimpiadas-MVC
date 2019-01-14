<?php
    require_once 'modelobase.php';
    class categoria extends ModeloBase {
        public $id_categoria;
        public $nombre;
        public $sexo;
        public $id_deporte;
        public $record_olimpico;
        public $record_mundial;
        
        public function __construct(){
                    //herede la conexion a bd
                    parent::__construct();
        }
        public function Guardar(){
           $sql =  "INSERT INTO categorias  (id_categoria,
                                            nombre,
                                            sexo,
                                            id_deporte,
                                            record_olimpico,
                                            record_mundial) values 
                ({$this->id_categoria}, '{$this->nombre}',
                '{$this->sexo}', {$this->id_deporte},
                '{$this->record_olimpico}', '{$this->record_mundial}'
                );";
           $guardado = $this->db->query($sql);
           return $guardado;
        }
    }
?>