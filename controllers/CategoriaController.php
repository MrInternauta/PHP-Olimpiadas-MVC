<?php
 require_once 'models/categoria.php';

    class CategoriaController {
        public function mostrar (){
           
            $DeporteModel = new Categoria();
            $Deportes = $DeporteModel->MostrarTodos('categorias');
            require_once 'views/categoria/mostrar.php'; 

        }

        public function mostrar_select (){
           
            $paisModel = new Categoria();
            $paises = $paisModel->MostrarTodos('categorias');
            $pais = $paises->fetch_object();
            require_once 'views/categoria/mostrar_select.php'; 

        }

    

        public function mostraruno () {
            
               $error = '';
             if($_SERVER['REQUEST_METHOD']== 'GET'){
                 
                 
                     if( !empty($_GET['id_categoria']) ){
                        $paisModel = new Categoria();
                        $paises = $paisModel->MostrarUno('categorias', 'id_categoria', $_GET['id_categoria'] );
                        $pais = $paises->fetch_object();
                    }else {
                        header('Location: index.php?c=home&a=home');
                    }

                 
                     require_once 'views/categoria/modificar.php';
            }

        }



                public function editar(){

             $error = '';
             if($_SERVER['REQUEST_METHOD']== 'POST'){

                if( !empty($_POST['id_categoria'])  && !empty($_POST['nombre']) && !empty($_POST['sexo']) && !empty($_POST['id_deporte']) && !empty($_POST['record_olimpico']) && !empty($_POST['record_mundial']) ){
                        $paisModel = new Categoria();
                        $paisModel->id_categoria = $_POST['id_categoria'];
                        $paisModel->nombre = $_POST['nombre'];
                        $paisModel->sexo = $_POST['sexo'];
                        $paisModel->id_deporte = $_POST['id_deporte'];
                        $paisModel->record_olimpico = $_POST['record_olimpico'];
                        $paisModel->record_mundial = $_POST['record_mundial'];
                        $res = $paisModel->ejecute_consulte("UPDATE categorias SET 
                        nombre = '{$paisModel->nombre}',
                        sexo = '{$paisModel->sexo}',
                        id_deporte = {$paisModel->id_deporte},
                        record_olimpico = '{$paisModel->record_olimpico}',
                        record_mundial = '{$paisModel->record_mundial}'                        
                        WHERE id_categoria = {$paisModel->id_categoria};");

                        $paises = $paisModel->MostrarUno('categorias', 'id_categoria', $paisModel->id_categoria );
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

            require_once 'views/categoria/modificar.php';
           
        }

        public function borrar(){
            
        }
         public function crear(){
             $error = '';
             if($_SERVER['REQUEST_METHOD']== 'POST'){

                 if( !empty($_POST['id_categoria'])  && !empty($_POST['nombre']) && !empty($_POST['sexo']) && !empty($_POST['id_deporte']) && !empty($_POST['record_olimpico']) && !empty($_POST['record_mundial']) ){
                        $paisModel = new Categoria();
                        $paisModel->id_categoria = $_POST['id_categoria'];
                        $paisModel->nombre = $_POST['nombre'];
                        $paisModel->sexo = $_POST['sexo'];
                        $paisModel->id_deporte = $_POST['id_deporte'];
                        $paisModel->record_olimpico = $_POST['record_olimpico'];
                        $paisModel->record_mundial = $_POST['record_mundial'];
                        $paisModel->Guardar();
                        $paises = $paisModel->MostrarUno('categorias', 'id_categoria', $_POST['id_categoria'] );
                        $pais = $paises->fetch_object();
                        $error = 'Creado';
                 }else {
                     $error = 'Faltan datos';
                 }

            }

            require_once 'views/categoria/modificar.php';

        }




    }

    

?>