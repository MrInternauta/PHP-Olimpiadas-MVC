

 <div class="container">
    <h1 class="jumbotron-heading">  DEPORTES </h1>
    <hr class="featurette-divider">
    <div class="row">
    

    <?php if(!empty($pais->id_deporte)):  ?>
       <form action="index.php?c=deporte&a=editar" method="post">
    <?php else: ?>
    <form action="index.php?c=deporte&a=crear" method="post">
<?php endif; ?>
            <div class="form-group">
                <label for="exampleInputEmail1">Id deporte</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_deporte" value="<?php if(!empty($pais->id_deporte)){ echo $pais->id_deporte;} ?>">

            </div>

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


