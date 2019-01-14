<?php
    require_once 'config/database.php';
    class ModeloBase{
        public $db;
        public function __construct(){
            //conexion a db
            $this->db = database::conectar();

        }
        public function MostrarTodos($tabla){
           //var_dump ($this->db); 
            $query = $this->db->query("SELECT * FROM $tabla");
            return $query;
        }
        public function MostrarUno($tabla, $name_id, $id){
           $query =   $this->db->query("SELECT * FROM  $tabla WHERE $name_id = $id");
           return $query;
        }

         public function borrar($tabla, $name_id, $id){
           $query =   $this->db->query("DELETE * FROM  $tabla WHERE $name_id = $id");
           return $query;
        }
        public function ejecute_consulte($query) {

             $queryres =   $this->db->query("$query");
           return $queryres;
        }
    }

?>