

 <div class="container">
    <h1 class="jumbotron-heading">  SEDES </h1>
    <hr class="featurette-divider">
    <div class="row">

    <?php if(!empty($pais->id_sede)):  ?>
       <form action="index.php?c=sede&a=editar" method="post">
    <?php else: ?>
    <form action="index.php?c=sede&a=crear" method="post">
<?php endif; ?>
            <div class="form-group">
                <label for="exampleInputEmail1">id_sede</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_sede" value="<?php if(!empty($pais->id_sede)){ echo $pais->id_sede;} ?>">

            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">nombre_sede</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="nombre_sede" value="<?php if(!empty($pais->nombre_sede)){ echo $pais->nombre_sede;} ?>">

            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">capacidad</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="capacidad" value="<?php if(!empty($pais->capacidad)){ echo $pais->capacidad;} ?>">

            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">ubicacion</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ubicacion" value="<?php if(!empty($pais->ubicacion)){ echo $pais->ubicacion;} ?>">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">ciudad</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ciudad" value="<?php if(!empty($pais->ciudad)){ echo $pais->ciudad;} ?>">

            </div>
              <?php
                include_once 'controllers/SedeController.php';
                $select_pais = new SedeController();
                $select_pais->mostrar_select();
            ?>




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


