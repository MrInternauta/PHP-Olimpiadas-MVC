


 <div class="container">
    <h1 class="jumbotron-heading"> JUECES </h1>
    <hr class="featurette-divider">
    <div class="row">

    <?php if(!empty($pais->id_juez)):  ?>
       <form action="index.php?c=juez&a=editar" method="post">
    <?php else: ?>
    <form action="index.php?c=juez&a=crear" method="post">
<?php endif; ?>

            <div class="form-group">
                <label for="exampleInputEmail1">Id juez</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_juez" value="<?php if(!empty($pais->id_juez)){ echo $pais->id_juez;} ?>">

            </div>

                      <?php
                include_once 'controllers/DeporteController.php';
                $select_pais = new DeporteController();
                $select_pais->mostrar_select();
            ?>


            <?php
                include_once 'controllers/PaisController.php';
                $select_pais = new PaisController();
                $select_pais->mostrar_select();
            ?>
      


            <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="nombre" value="<?php if(!empty($pais->nombre)){ echo $pais->nombre;} ?>">

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


