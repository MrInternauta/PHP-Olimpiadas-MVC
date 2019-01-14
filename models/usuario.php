<?php
    require_once 'modelobase.php';
    Class Usuario extends ModeloBase{
        public $nombres;
        public $apellido;
        public $email;
        public $pass;
        
        public function __construct(){
            //herede la conexion a bd
            parent::__construct();
        }

        
    }
?>