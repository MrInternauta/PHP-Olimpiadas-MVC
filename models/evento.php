<?php
    require_once 'modelobase.php';
    class Evento extends ModeloBase {
        public $id_evento;
        public $id_categoria;
        public $id_sede;
        public $id_juegos;
        public $fecha_hora;
        public $descripcion;
        public $medalla;
        public $equipo_individual;
        
        public function __construct(){
                    //herede la conexion a bd
                    parent::__construct();
        }
        public function Guardar(){
           $sql =  "INSERT INTO eventos  (id_evento,
                                            id_categoria,
                                            id_sede,
                                            id_juegos,
                                            fecha_hora,
                                            descripcion,
                                            medalla,
                                            equipo_individual
                                            
                                            ) values 
                ({$this->id_evento}, {$this->id_categoria},
                {$this->id_sede}, {$this->id_juegos},
                '{$this->fecha_hora}', '{$this->descripcion}',
                '{$this->medalla}', '{$this->equipo_individual}'
                );";
           $guardado = $this->db->query($sql);
           return $guardado;
        }

        public function Editar(){
           $sql =  "UPDATE eventos SET 
           id_categoria = {$this->id_categoria},
           id_sede = {$this->id_sede},
           id_juegos = {$this->id_juegos},
           fecha_hora = {$this->fecha_hora},
           descripcion = {$this->descripcion},
           medalla = {$this->medalla},
           equipo_individual = {$this->equipo_individual}
           WHERE id_evento = {$this->id_evento};";
           $guardado = $this->db->query($sql);
           return $guardado;
        }


    }
?>