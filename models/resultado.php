<?php
    require_once 'modelobase.php';
    class Resultado extends ModeloBase {
        public $id_result;
        public $id_juegos;
        public $id_deporte;
        public $id_pais;
        public $lugar;
        public $puntaje;
        public $descripcion;
        public $id_evento;
        public $equipo_individual;
        
        public function __construct(){
                    //herede la conexion a bd
                    parent::__construct();
        }
        public function Guardar(){

            // INSERT INTO `resultados` (`id_result`, `id_juegos`, `id_deporte`, `id_pais`, `lugar`, `puntaje`, `descripcion`, `id_evento`, `equipo_individual`) 
            // VALUES ('645564', '1499', '99', '20', '6', '4', '64', '2', '2');
           $sql =  "INSERT INTO resultados  (id_result,
                                                id_juegos,
                                                id_deporte,
                                                id_pais,
                                                lugar,
                                                puntaje,
                                                descripcion,
                                                id_evento,
                                                equipo_individual
                                            
                                            ) values 
                ({$this->id_result}, {$this->id_juegos},
                {$this->id_deporte}, {$this->id_pais},
                {$this->lugar}, {$this->puntaje},
                '{$this->descripcion}', {$this->id_evento},
                {$this->equipo_individual});";
           $guardado = $this->db->query($sql);
           return $guardado;
        }

            public function Editar(){
           $sql =  "UPDATE resultados SET 
           id_juegos = {$this->id_juegos},
           id_deporte = {$this->id_deporte},
           id_pais = {$this->id_pais},
           lugar = {$this->lugar},
           puntaje = {$this->puntaje},
           descripcion = '{$this->descripcion}',
           id_evento = {$this->id_evento},
           equipo_individual = {$this->equipo_individual}
           WHERE id_result = {$this->id_result};";
           $guardado = $this->db->query($sql);
           return $guardado;
        }

    }
?>