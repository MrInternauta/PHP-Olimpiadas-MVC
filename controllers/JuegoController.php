<?php
 require_once 'models/juego.php';

    class JuegoController {
        public function mostrar (){
           
            $paisModel = new Juego();
            $paiss = $paisModel->MostrarTodos('juegos_olimpicos');
           require_once 'views/juego/mostrar.php'; 
        }
        
        public function mostrar_select (){
           
            $paisModel = new Juego();
            $paises = $paisModel->MostrarTodos('juegos_olimpicos');
            $pais = $paises->fetch_object();
            require_once 'views/juego/mostrar_select.php'; 

        }


        public function editar(){

             $error = '';
             if($_SERVER['REQUEST_METHOD']== 'POST'){
                 
                 if( !empty($_POST['id_juegos'])  && !empty($_POST['nombre']) ){
                        $paisModel = new Juego();
                        $nombre =$_POST['nombre'];
                        $res = $paisModel->ejecute_consulte("UPDATE juegos_olimpicos SET nombre = '{$nombre}' WHERE id_juegos = {$_POST['id_juegos']};");
                        $paises = $paisModel->MostrarUno('juegos_olimpicos', 'id_juegos', $_POST['id_juegos'] );
                        $pais = $paises->fetch_object();
                        if($res == 1) {
                            $error = 'Creado';
                        }else {
                            $error ='Error al actualizar';
                        }
                 }else {
                     $error = 'Faltan datos';
                 }

            }

            require_once 'views/juego/modificar.php';
           
        }

        public function mostraruno () {
            
               $error = '';
             if($_SERVER['REQUEST_METHOD']== 'GET'){
                 
                 
                     if( !empty($_GET['id_juegos']) ){
                        $paisModel = new Juego();
                        $paises = $paisModel->MostrarUno('juegos_olimpicos', 'id_juegos', $_GET['id_juegos'] );
                        $pais = $paises->fetch_object();
                    }else {
                        header('Location: index.php?c=home&a=home');
                    }

                 
                     require_once 'views/juego/modificar.php';
            }

        }
        public function borrar(){
            
        }
         public function crear(){
             $error = '';
             if($_SERVER['REQUEST_METHOD']== 'POST'){
                 
                 if( !empty($_POST['id_juegos'])  && !empty($_POST['nombre']) ){
                        $paisModel = new Juego();
                        $paisModel->id_juegos = $_POST['id_juegos'];
                        $paisModel->nombre =$_POST['nombre'];
                        $paisModel->Guardar();
                         $paises = $paisModel->MostrarUno('juegos_olimpicos', 'id_juegos', $_POST['id_juegos'] );
                        $pais = $paises->fetch_object();
                        $error = 'Creado';
                 }else {
                     $error = 'Faltan datos';
                 }

            }

            require_once 'views/juego/modificar.php';

        }
    }

?>