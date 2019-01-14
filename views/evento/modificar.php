

 <div class="container">
    <h1 class="jumbotron-heading"> EVENTOS </h1>
    <hr class="featurette-divider">
    <div class="row">

    <?php if(!empty($pais->id_evento)):  ?>
       <form action="index.php?c=evento&a=editar" method="post">
    <?php else: ?>
    <form action="index.php?c=evento&a=crear" method="post">
<?php endif; ?>
            <div class="form-group">
                <label for="exampleInputEmail1">id_evento</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_evento" value="<?php if(!empty($pais->id_evento)){ echo $pais->id_evento;} ?>">

            </div>

              <?php
                include_once 'controllers/CategoriaController.php';
                $select_pais = new CategoriaController();
                $select_pais->mostrar_select();
            ?>


                 <?php
                include_once 'controllers/SedeController.php';
                $select_pais = new SedeController();
                $select_pais->mostrar_select();
            ?>

            
              <?php
                include_once 'controllers/JuegoController.php';
                $select_pais = new JuegoController();
                $select_pais->mostrar_select();
            ?>

            

            
            <div class="form-group">
                <label for="exampleInputEmail1">descripcion</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="descripcion" value="<?php if(!empty($pais->descripcion)){ echo $pais->descripcion;} ?>">

            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">medalla</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="medalla" value="<?php if(!empty($pais->medalla)){ echo $pais->medalla;} ?>">

            </div>

            
            <div class="form-group">
                <label for="exampleInputEmail1">equipo_individual</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="equipo_individual" value="<?php if(!empty($pais->equipo_individual)){ echo $pais->equipo_individual;} ?>">

            </div>



            <?php if($error == 'Creado'): ?>
            <div class="alert alert-success" role="alert">
            Consulta realizada correctamente
            </div>
            <?php endif; ?>
            <?php if ($error != '' && $error != 'Creado' && !empty($error)): ?>
            <div class="alert alert-danger" role="alert">
            <?php echo $error; ?>
            </div>
            <?php endif; ?>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>



    </div>

</div>


