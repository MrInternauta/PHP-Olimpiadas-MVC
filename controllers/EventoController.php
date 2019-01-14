<?php
 require_once 'models/evento.php';

    class EventoController {
        public function mostrar (){
           
            $paisModel = new Evento();
            $paiss = $paisModel->MostrarTodos('eventos');
            require_once 'views/evento/mostrar.php'; 

        }
        public function mostrar_select (){
           
            $paisModel = new Evento();
            $paises = $paisModel->MostrarTodos('eventos');
            $pais = $paises->fetch_object();
            require_once 'views/evento/mostrar_select.php'; 

        }

        
                public function mostraruno () {
            
               $error = '';
             if($_SERVER['REQUEST_METHOD']== 'GET'){
                 
                 
                     if( !empty($_GET['id_evento']) ){
                        $paisModel = new Evento();
                        $paises = $paisModel->MostrarUno('eventos', 'id_evento', $_GET['id_evento'] );
                        $pais = $paises->fetch_object();
                    }else {
                        header('Location: index.php?c=home&a=home');
                    }

                 
                     require_once 'views/evento/modificar.php';
                    }

                }



                public function editar(){

             $error = '';
             if($_SERVER['REQUEST_METHOD']== 'POST'){


                    if( !empty($_POST['id_evento'])  && !empty($_POST['id_categoria']) && !empty($_POST['id_sede']) && !empty($_POST['id_juegos'])
                 
                      && !empty($_POST['descripcion'])  && !empty($_POST['medalla'])  && !empty($_POST['equipo_individual'])
                    ){
                        $paisModel = new Evento();

                        $paisModel->id_evento = $_POST['id_evento'];
                        $paisModel->id_categoria = $_POST['id_categoria'];
                        $paisModel->id_sede = $_POST['id_sede'];
                        $paisModel->id_juegos = $_POST['id_juegos'];
                        $paisModel->descripcion = $_POST['descripcion'];
                        $paisModel->medalla = $_POST['medalla'];
                         $paisModel->equipo_individual = $_POST['equipo_individual'];


                        $res = $paisModel->ejecute_consulte("UPDATE eventos SET
                        id_categoria  = '{$paisModel->id_categoria}',
                        id_sede = '{$paisModel->id_sede}',
                        id_juegos = '{$paisModel->id_juegos}',
                        fecha_hora = '{$paisModel->fecha_hora}',
                        descripcion = '{$paisModel->descripcion}',
                        medalla = '{$paisModel->medalla}',
                        equipo_individual = '{$paisModel->equipo_individual}'              
                        WHERE id_evento = '{$paisModel->id_evento}';");

                        $paises = $paisModel->MostrarUno('eventos', 'id_evento', $_POST['id_evento'] );
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

            require_once 'views/evento/modificar.php';
           
        }


         public function crear(){

             $error = '';
             if($_SERVER['REQUEST_METHOD']== 'POST'){

               if( !empty($_POST['id_evento'])  && !empty($_POST['id_categoria']) && !empty($_POST['id_sede']) && !empty($_POST['id_juegos'])
                 
                      && !empty($_POST['descripcion'])  && !empty($_POST['medalla'])  && !empty($_POST['equipo_individual'])
                    ){
                        $paisModel = new Evento();

                        $paisModel->id_evento = $_POST['id_evento'];
                        $paisModel->id_categoria = $_POST['id_categoria'];
                        $paisModel->id_sede = $_POST['id_sede'];
                        $paisModel->id_juegos = $_POST['id_juegos'];
                        $paisModel->descripcion = $_POST['descripcion'];
                        $paisModel->medalla = $_POST['medalla'];
                         $paisModel->equipo_individual = $_POST['equipo_individual'];


                        $res = $paisModel->Guardar();

                        $paises = $paisModel->MostrarUno('eventos', 'id_evento', $_POST['id_evento'] );
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

            require_once 'views/evento/modificar.php';

        }
    }

?>