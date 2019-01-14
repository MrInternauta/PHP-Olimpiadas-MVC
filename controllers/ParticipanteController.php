<?php
 require_once 'models/participante.php';

    class ParticipanteController {
        public function mostrar (){
           
            $paisModel = new Participante();
            $paiss = $paisModel->MostrarTodos('participantes');
            require_once 'views/participante/mostrar.php'; 

        }

                public function mostrar_select (){
           
            $paisModel = new Participante();
            $paises = $paisModel->MostrarTodos('participantes');
            $pais = $paises->fetch_object();
            require_once 'views/participante/mostrar_select.php'; 

        }


         public function mostraruno () {
            
               $error = '';
             if($_SERVER['REQUEST_METHOD']== 'GET'){
                 
                 
                     if( !empty($_GET['id_participante']) ){
                        $paisModel = new Participante();
                        $paises = $paisModel->MostrarUno('participantes', 'id_participante', $_GET['id_participante'] );
                        $pais = $paises->fetch_object();
                    }else {
                        header('Location: index.php?c=home&a=home');
                    }

                 
                     require_once 'views/participante/modificar.php';
                    }

                }



                public function editar(){

             $error = '';
             if($_SERVER['REQUEST_METHOD']== 'POST'){

                    if( !empty($_POST['id_participante'])  && !empty($_POST['nombre']) && !empty($_POST['id_pais']) && !empty($_POST['record'])
                 
                    && !empty($_POST['descripcion'])
                    ){
                        $paisModel = new Participante();
                        $paisModel->id_participante = $_POST['id_participante'];
                        $paisModel->nombre = $_POST['nombre'];
                        $paisModel->id_pais = $_POST['id_pais'];
                        $paisModel->record = $_POST['record'];
                         $paisModel->descripcion = $_POST['descripcion'];
                        $res = $paisModel->ejecute_consulte("UPDATE participantes SET
                        nombre = '{$paisModel->nombre}',
                        id_pais = {$paisModel->id_pais},  
                        record = {$paisModel->record},
                        descripcion = '{$paisModel->descripcion} '                
                        WHERE id_participante = '{$paisModel->id_participante}';");

                        $paises = $paisModel->MostrarUno('participantes', 'id_participante', $_POST['id_participante'] );
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

            require_once 'views/participante/modificar.php';
           
        }

        public function borrar(){
               $error = '';
             if($_SERVER['REQUEST_METHOD']== 'GET'){
                 
                 
                     if( !empty($_GET['id_participante']) ){
                        $paisModel = new Participante();
                         $paisModel->ejecute_consulte("DELETE FROM participantes WHERE id_participante = {$_GET['id_participante']}");
                        $this->mostrar();
                    }else {
                        header('Location: index.php?c=home&a=home');
                    }

                 
                    }
            
        }
         public function crear(){

             $error = '';
             if($_SERVER['REQUEST_METHOD']== 'POST'){

                 if( !empty($_POST['id_participante'])  && !empty($_POST['nombre']) && !empty($_POST['id_pais']) && !empty($_POST['record'])
                 
                    && !empty($_POST['descripcion'])
                    ){
                        $paisModel = new Participante();
                        $paisModel->id_participante = $_POST['id_participante'];
                        $paisModel->nombre = $_POST['nombre'];
                        $paisModel->id_pais = $_POST['id_pais'];
                        $paisModel->record = $_POST['record'];
                         $paisModel->descripcion = $_POST['descripcion'];
                        $res = $paisModel->Guardar();
                        $paises = $paisModel->MostrarUno('participantes', 'id_participante', $_POST['id_participante'] );
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

            require_once 'views/participante/modificar.php';

        }
    }

?>