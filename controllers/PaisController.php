<?php
 require_once 'models/pais.php';

    class PaisController {
        public function mostrar (){
           
            $paisModel = new Pais();
            $paises = $paisModel->MostrarTodos('pais');
            $pais = $paises->fetch_object();
            require_once 'views/pais/mostrar.php'; 

        }
         public function mostrar_select (){
           
            $paisModel = new Pais();
            $paises = $paisModel->MostrarTodos('pais');
            $pais = $paises->fetch_object();
            require_once 'views/pais/mostrar_select.php'; 

        }
        public function editar(){

             $error = '';
             if($_SERVER['REQUEST_METHOD']== 'POST'){
                 
                 if( !empty($_POST['id_pais'])  && !empty($_POST['nombre']) && !empty($_POST['num']) ){
                        $paisModel = new Pais();
                        $paisModel->id_pais = $_POST['id_pais'];
                        $paisModel->nombres =$_POST['nombre'];
                        $paisModel->num_participantes = $_POST['num'];
                        $res = $paisModel->Modificar();
                        $paises = $paisModel->MostrarUno('pais', 'id_pais', $_POST['id_pais'] );
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

            require_once 'views/pais/modificar.php';
           
        }

        public function mostraruno () {
            
               $error = '';
             if($_SERVER['REQUEST_METHOD']== 'GET'){
                 
                 
                     if( !empty($_GET['id_pais']) ){
                        $paisModel = new Pais();
                        $paises = $paisModel->MostrarUno('pais', 'id_pais', $_GET['id_pais'] );
                        $pais = $paises->fetch_object();
                    }else {
                        header('Location: index.php?c=home&a=home');
                    }

                 
                     require_once 'views/pais/modificar.php';
            }

        }
        public function borrar(){
            
        }
         public function crear(){
             $error = '';
             if($_SERVER['REQUEST_METHOD']== 'POST'){
                 
                 if( !empty($_POST['id_pais'])  && !empty($_POST['nombre']) && !empty($_POST['num']) ){
                        $paisModel = new Pais();
                        $paisModel->id_pais = $_POST['id_pais'];
                        $paisModel->nombres =$_POST['nombre'];
                        $paisModel->num_participantes = $_POST['num'];
                        $paisModel->Guardar();
                         $paises = $paisModel->MostrarUno('pais', 'id_pais', $_POST['id_pais'] );
                        $pais = $paises->fetch_object();
                        $error = 'Creado';
                 }else {
                     $error = 'Faltan datos';
                 }

            }

            require_once 'views/pais/modificar.php';

        }
    }

?>