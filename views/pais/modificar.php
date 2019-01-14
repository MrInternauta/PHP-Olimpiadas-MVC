

 <div class="container">
    <h1 class="jumbotron-heading"> PAISES </h1>
    <hr class="featurette-divider">
    <div class="row">

    <?php if(!empty($pais->id_pais)):  ?>
       <form action="index.php?c=pais&a=editar" method="post">
    <?php else: ?>
    <form action="index.php?c=pais&a=crear" method="post">
<?php endif; ?>
            <div class="form-group">
                <label for="exampleInputEmail1">Id Pais</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_pais" value="<?php if(!empty($pais->id_pais)){ echo $pais->id_pais;} ?>">

            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="nombre" value="<?php if(!empty($pais->nombre)){ echo $pais->nombre;} ?>">

            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Competidores</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="num" value="<?php if(!empty($pais->n_competidores)){ echo $pais->n_competidores;} ?>">

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


