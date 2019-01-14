

 <div class="container">
    <h1 class="jumbotron-heading">  PARTICIPANTES </h1>
    <hr class="featurette-divider">
    <div class="row">

    <?php if(!empty($pais->id_participante)):  ?>
       <form action="index.php?c=participante&a=editar" method="post">
    <?php else: ?>
    <form action="index.php?c=participante&a=crear" method="post">
<?php endif; ?>
            <div class="form-group">
                <label for="exampleInputEmail1">Id participante</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_participante" value="<?php if(!empty($pais->id_participante)){ echo $pais->id_participante;} ?>">

            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="nombre" value="<?php if(!empty($pais->nombre)){ echo $pais->nombre;} ?>">

            </div>

            <?php
                include_once 'controllers/PaisController.php';
                $select_pais = new PaisController();
                $select_pais->mostrar_select();
            ?>

              <div class="form-group">
                <label for="exampleInputEmail1">record</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="record" value="<?php if(!empty($pais->record)){ echo $pais->record;} ?>">

            </div>



            <div class="form-group">
                <label for="exampleInputEmail1">descripcion</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="descripcion" value="<?php if(!empty($pais->descripcion)){ echo $pais->descripcion;} ?>">

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


