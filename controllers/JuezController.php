<?php
 require_once 'models/juez.php';

    class JuezController {
        public function mostrar (){
           
            $paisModel = new Juez();
            $paiss = $paisModel->MostrarTodos('jueces');
           require_once 'views/juez/mostrar.php'; 

        }

                public function mostrar_select (){
           
            $paisModel = new Juez();
            $paises = $paisModel->MostrarTodos('jueces');
            $pais = $paises->fetch_object();
            require_once 'views/juez/mostrar_select.php'; 

        }

        
            public function mostraruno () {
            
               $error = '';
             if($_SERVER['REQUEST_METHOD']== 'GET'){
                 
                 
                     if( !empty($_GET['id_juez']) ){
                        $paisModel = new Juez();
                        $paises = $paisModel->MostrarUno('jueces', 'id_juez', $_GET['id_juez'] );
                        $pais = $paises->fetch_object();
                    }else {
                        header('Location: index.php?c=home&a=home');
                    }

                 
                     require_once 'views/juez/modificar.php';
                    }

                }



                public function editar(){

             $error = '';
             if($_SERVER['REQUEST_METHOD']== 'POST'){

                if( !empty($_POST['id_juez'])  && !empty($_POST['id_deporte']) && !empty($_POST['id_pais']) && !empty($_POST['nombre']) ){
                        $paisModel = new Juez();
                        $paisModel->id_juez = $_POST['id_juez'];
                        $paisModel->id_deporte = $_POST['id_deporte'];
                        $paisModel->id_pais = $_POST['id_pais'];
                        $paisModel->nombre = $_POST['nombre'];
                        // UPDATE `jueces` SET `nombre` = 'TOSI Ful' WHERE `jueces`.`id_juez` = 2;

                        $res = $paisModel->ejecute_consulte("UPDATE jueces SET
                        nombre = '{$paisModel->nombre}',
                        id_deporte = {$paisModel->id_deporte},
                        id_pais = {$paisModel->id_pais}                    
                        WHERE id_juez = '{$paisModel->id_juez}';");

                        if($res == 1) {
                            $error = 'Creado';
                        }else {
                            $error ='Error al actualizar';
                        }
                        $paises = $paisModel->MostrarUno('jueces', 'id_juez', $_POST['id_juez'] );
                        $pais = $paises->fetch_object();
                        $error = 'Creado';
                 }



             else {
                     $error = 'Faltan datos';
                 }

            }

            require_once 'views/juez/modificar.php';
           
        }

        public function borrar(){
               $error = '';
             if($_SERVER['REQUEST_METHOD']== 'GET'){
                 
                 
                     if( !empty($_GET['id_juez']) ){
                        $paisModel = new Juez();
                         $paisModel->ejecute_consulte("DELETE FROM jueces WHERE id_juez = {$_GET['id_juez']}");
                        $this->mostrar();
                    }else {
                        header('Location: index.php?c=home&a=home');
                    }

                 
                    }
            
        }
         public function crear(){
             $error = '';
             if($_SERVER['REQUEST_METHOD']== 'POST'){

                 if( !empty($_POST['id_juez'])  && !empty($_POST['id_deporte']) && !empty($_POST['id_pais']) && !empty($_POST['nombre']) ){
                        $paisModel = new Juez();
                        $paisModel->id_juez = $_POST['id_juez'];
                        $paisModel->id_deporte = $_POST['id_deporte'];
                        $paisModel->id_pais = $_POST['id_pais'];
                        $paisModel->nombre = $_POST['nombre'];
                        $res = $paisModel->Guardar();
                        $paises = $paisModel->MostrarUno('jueces', 'id_juez', $_POST['id_juez'] );
                        $pais = $paises->fetch_object();
                        $error = 'Creado';
                        if($res == 1) {
                            $error = 'Creado';
                        }else {
                            $error ='Error al actualizar';
                        }

                 }else {
                     $error = 'Faltan datos';
                 }

            }

            require_once 'views/juez/modificar.php';

        }




    }

?>