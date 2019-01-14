<?php
 require_once 'models/sede.php';

    class SedeController {
        public function mostrar (){
           
            $paisModel = new Sede();
            $paiss = $paisModel->MostrarTodos('sedes');
            require_once 'views/sede/mostrar.php'; 

        }

                public function mostrar_select (){
           
            $paisModel = new Sede();
            $paises = $paisModel->MostrarTodos('sedes');
            $pais = $paises->fetch_object();
            require_once 'views/sede/mostrar_select.php'; 

        }


         public function mostraruno () {
            
               $error = '';
             if($_SERVER['REQUEST_METHOD']== 'GET'){
                 
                 
                     if( !empty($_GET['id_sede']) ){
                        $paisModel = new Sede();
                        $paises = $paisModel->MostrarUno('sedes', 'id_sede', $_GET['id_sede'] );
                        $pais = $paises->fetch_object();
                    }else {
                        header('Location: index.php?c=home&a=home');
                    }

                 
                     require_once 'views/sede/modificar.php';
                    }

                }



                public function editar(){

             $error = '';
             if($_SERVER['REQUEST_METHOD']== 'POST'){

                    if( !empty($_POST['id_sede'])  && !empty($_POST['nombre_sede']) 
                    && !empty($_POST['capacidad']) && !empty($_POST['ubicacion'])
                    && !empty($_POST['ciudad']) && !empty($_POST['id_juegos'])
                    ){
                        $paisModel = new Sede();
                        $paisModel->id_sede = $_POST['id_sede'];
                        $paisModel->nombre_sede = $_POST['nombre_sede'];
                        $paisModel->capacidad = $_POST['capacidad'];
                        $paisModel->ubicacion = $_POST['ubicacion'];
                        $paisModel->ciudad = $_POST['ciudad'];
                        $paisModel->id_juegos = $_POST['id_juegos'];
                        $res = $paisModel->ejecute_consulte("UPDATE sedes SET
                        nombre_sede = '{$paisModel->nombre_sede}',
                        capacidad = {$paisModel->capacidad},  
                        ubicacion = '{$paisModel->ubicacion}',
                        ciudad = '{$paisModel->ciudad}',  
                        id_juegos = {$paisModel->id_juegos}                
                        WHERE id_sede = {$paisModel->id_sede};");
                        $paises = $paisModel->MostrarUno('sedes', 'id_sede', $_POST['id_sede'] );
                        $pais = $paises->fetch_object();
                        $error = 'Creado';
                        if($res == 1) {
                            $error = 'Creado';
                        }else {
                            $error ='Error al actualizar';
                        }

                 }





             else {
                     $error = 'Faltan datos';
                 }

            }

            require_once 'views/sede/modificar.php';
           
        }


         public function crear(){

             $error = '';
             if($_SERVER['REQUEST_METHOD']== 'POST'){

                    if( !empty($_POST['id_sede'])  && !empty($_POST['nombre_sede']) 
                    && !empty($_POST['capacidad']) && !empty($_POST['ubicacion'])
                    && !empty($_POST['ciudad']) && !empty($_POST['id_juegos'])
                    ){
                        $paisModel = new Sede();
                        $paisModel->id_sede = $_POST['id_sede'];
                        $paisModel->nombre_sede = $_POST['nombre_sede'];
                        $paisModel->capacidad = $_POST['capacidad'];
                        $paisModel->ubicacion = $_POST['ubicacion'];
                        $paisModel->ciudad = $_POST['ciudad'];
                        $paisModel->id_juegos = $_POST['id_juegos'];
                        $res= $paisModel->Guardar();
                        $paises = $paisModel->MostrarUno('sedes', 'id_sede', $_POST['id_sede'] );
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

            require_once 'views/sede/modificar.php';

        }
    }

?>