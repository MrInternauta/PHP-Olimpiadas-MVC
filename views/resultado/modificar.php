

 <div class="container">
    <h1 class="jumbotron-heading"> RESULTADOS </h1>
    <hr class="featurette-divider">
    <div class="row">

    <?php if(!empty($pais->id_result)):  ?>
       <form action="index.php?c=resultado&a=editar" method="post">
    <?php else: ?>
    <form action="index.php?c=resultado&a=crear" method="post">
<?php endif; ?>
            <div class="form-group">
<!--             
        id_result
id_juegos
id_deporte
id_pais
lugar
puntaje
descripcion
id_evento
equipo_individual
 -->


                <label for="exampleInputEmail1">id_result</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_result" value="<?php if(!empty($pais->id_result)){ echo $pais->id_result;} ?>">

            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">id_juegos</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="id_juegos" value="<?php if(!empty($pais->id_juegos)){ echo $pais->id_juegos;} ?>">

            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">id_deporte</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_deporte" value="<?php if(!empty($pais->id_deporte)){ echo $pais->id_deporte;} ?>">

            </div>
            
            <?php
                include_once 'controllers/PaisController.php';
                $select_pais = new PaisController();
                $select_pais->mostrar_select();
            ?>
            

            
            <div class="form-group">
                <label for="exampleInputEmail1">lugar</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="lugar" value="<?php if(!empty($pais->lugar)){ echo $pais->lugar;} ?>">

            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">puntaje</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="puntaje" value="<?php if(!empty($pais->puntaje)){ echo $pais->puntaje;} ?>">

            </div>

            
            <div class="form-group">
                <label for="exampleInputEmail1">descripcion</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="descripcion" value="<?php if(!empty($pais->descripcion)){ echo $pais->descripcion;} ?>">

            </div>

           <?php
                include_once 'controllers/EventoController.php';
                $select_pais = new EventoController();
                $select_pais->mostrar_select();
            ?>


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


