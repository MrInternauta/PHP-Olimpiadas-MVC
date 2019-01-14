

 <div class="container">
    <h1 class="jumbotron-heading">CATEGORIAS </h1>
    <hr class="featurette-divider">
    <div class="row">

    <?php if(!empty($pais->id_categoria)):  ?>
       <form action="index.php?c=categoria&a=editar" method="post">
    <?php else: ?>
    <form action="index.php?c=categoria&a=crear" method="post">
<?php endif; ?>

            <div class="form-group">
                <label for="exampleInputEmail1">Id categoria</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_categoria" value="<?php if(!empty($pais->id_categoria)){ echo $pais->id_categoria;} ?>">

            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">nombre</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nombre" value="<?php if(!empty($pais->nombre)){ echo $pais->nombre;} ?>">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">sexo</label>
                 <select id="inputState" class="form-control" name="sexo">
                    <option value="H">H</option>
                    <option value="M">M</option>
                </select>
            </div>


       
            <?php
                include_once 'controllers/DeporteController.php';
                $select_pais = new DeporteController();
                $select_pais->mostrar_select();
            ?>

            
            <div class="form-group">
                <label for="exampleInputEmail1">record_olimpico</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="record_olimpico" value="<?php if(!empty($pais->record_olimpico)){ echo $pais->record_olimpico;} ?>">

            </div>


            
            <div class="form-group">
                <label for="exampleInputEmail1">record_mundial</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="record_mundial" value="<?php if(!empty($pais->record_mundial)){ echo $pais->record_mundial;} ?>">

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






