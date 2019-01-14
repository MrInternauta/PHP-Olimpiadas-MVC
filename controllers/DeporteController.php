<?php
 require_once 'models/deporte.php';

    class DeporteController {
        public function mostrar (){
            $DeporteModel = new Deporte();
            $Deportes = $DeporteModel->MostrarTodos('deportes');
            require_once 'views/deporte/mostrar.php';
        }

         public function mostrar_select (){
           
            $paisModel = new Deporte();
            $paises = $paisModel->MostrarTodos('deportes');
            $pais = $paises->fetch_object();
            require_once 'views/deporte/mostrar_select.php'; 

        }


        public function editar(){

             $error = '';
             if($_SERVER['REQUEST_METHOD']== 'POST'){
                 
                 if( !empty($_POST['id_deporte'])  && !empty($_POST['nombre']) ){
                        $paisModel = new Deporte();
                        $id_deporte = $_POST['id_deporte'];
                        $nombre =$_POST['nombre'];
                        $res = $paisModel->ejecute_consulte("UPDATE deportes SET nombre = '{$nombre}' WHERE id_deporte = {$id_deporte};");
                        $paises = $paisModel->MostrarUno('deportes', 'id_deporte', $_POST['id_deporte'] );
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

            require_once 'views/deporte/modificar.php';
           
        }

        public function mostraruno () {
            
               $error = '';
             if($_SERVER['REQUEST_METHOD']== 'GET'){
                 
                 
                     if( !empty($_GET['id_deporte']) ){
                        $paisModel = new Deporte();
                        $paises = $paisModel->MostrarUno('deportes', 'id_deporte', $_GET['id_deporte'] );
                        $pais = $paises->fetch_object();
                    }else {
                        header('Location: index.php?c=home&a=home');
                    }

                 
                     require_once 'views/deporte/modificar.php';
            }

        }
        public function borrar(){
            
        }
         public function crear(){
             $error = '';
             if($_SERVER['REQUEST_METHOD']== 'POST'){
                 
                 if( !empty($_POST['id_deporte'])  && !empty($_POST['nombre']) ){
                        $paisModel = new Deporte();
                        $paisModel->id_deporte = $_POST['id_deporte'];
                        $paisModel->nombre =$_POST['nombre'];
                        $paisModel->Guardar();
                        $paises = $paisModel->MostrarUno('deportes', 'id_deporte', $_POST['id_deporte'] );
                        $pais = $paises->fetch_object();
                        $error = 'Creado';
                 }else {
                     $error = 'Faltan datos';
                 }

            }

            require_once 'views/deporte/modificar.php';

        }
    }

?>