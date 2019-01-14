<?php
 require_once 'models/resultado.php';

    class ResultadoController {
        public function mostrar (){
           
            $paisModel = new Resultado();
            $paiss = $paisModel->MostrarTodos('resultados');
            require_once 'views/resultado/mostrar.php'; 

        }

            public function mostraruno () {
            
               $error = '';
             if($_SERVER['REQUEST_METHOD']== 'GET'){
                 
                 
                     if( !empty($_GET['id_result']) ){
                        $paisModel = new Resultado();
                        $paises = $paisModel->MostrarUno('resultados', 'id_result', $_GET['id_result'] );
                        $pais = $paises->fetch_object();
                    }else {
                        header('Location: index.php?c=home&a=home');
                    }

                 
                     require_once 'views/resultado/modificar.php';
                    }

                }

               public function borrar(){
               $error = '';
             if($_SERVER['REQUEST_METHOD']== 'GET'){
                 
                 
                     if( !empty($_GET['id_result']) ){
                        $paisModel = new Resultado();
                         $paisModel->ejecute_consulte("DELETE FROM resultados WHERE id_result = {$_GET['id_result']}");
                        $this->mostrar();
                    }else {
                        header('Location: index.php?c=home&a=home');
                    }

                 
                    }
            
        }

                public function editar(){

             $error = '';
             if($_SERVER['REQUEST_METHOD']== 'POST'){

               if( !empty($_POST['id_result'])  && !empty($_POST['id_juegos']) && !empty($_POST['id_deporte']) && !empty($_POST['id_pais'])
                 
                      && !empty($_POST['lugar'])  && !empty($_POST['puntaje'])  && !empty($_POST['descripcion'])
                      && !empty($_POST['id_evento'])  && !empty($_POST['equipo_individual'])
                    ){
                        $paisModel = new Resultado();

                        $paisModel->id_result = $_POST['id_result'];
                        $paisModel->id_juegos = $_POST['id_juegos'];
                        $paisModel->id_deporte = $_POST['id_deporte'];
                        $paisModel->id_pais = $_POST['id_pais'];
                        $paisModel->lugar = $_POST['lugar'];
                        $paisModel->puntaje = $_POST['puntaje'];
                        $paisModel->descripcion = $_POST['descripcion'];
                        $paisModel->id_evento = $_POST['id_evento'];
                        $paisModel->equipo_individual = $_POST['equipo_individual'];

                        $res = $paisModel->Editar();

                        $paises = $paisModel->MostrarUno('resultados', 'id_result', $_POST['id_result'] );
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

            require_once 'views/resultado/modificar.php';
           
        }


         public function crear(){

             $error = '';
             if($_SERVER['REQUEST_METHOD']== 'POST'){


               if( !empty($_POST['id_result'])  && !empty($_POST['id_juegos']) && !empty($_POST['id_deporte']) && !empty($_POST['id_pais'])
                 
                      && !empty($_POST['lugar'])  && !empty($_POST['puntaje'])  && !empty($_POST['descripcion'])
                      && !empty($_POST['id_evento'])  && !empty($_POST['equipo_individual'])
                    ){
                        $paisModel = new Resultado();

                        $paisModel->id_result = $_POST['id_result'];
                        $paisModel->id_juegos = $_POST['id_juegos'];
                        $paisModel->id_deporte = $_POST['id_deporte'];
                        $paisModel->id_pais = $_POST['id_pais'];
                        $paisModel->lugar = $_POST['lugar'];
                        $paisModel->puntaje = $_POST['puntaje'];
                        $paisModel->descripcion = $_POST['descripcion'];
                        $paisModel->id_evento = $_POST['id_evento'];
                        $paisModel->equipo_individual = $_POST['equipo_individual'];

                        $res = $paisModel->Guardar();

                        $paises = $paisModel->MostrarUno('resultados', 'id_result', $_POST['id_result'] );
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

            require_once 'views/resultado/modificar.php';

        }
    }

?>