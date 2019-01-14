 <div class="container">
    <h1 class="jumbotron-heading"> CATEGORIAS </h1>
    <hr class="featurette-divider">
    <div class="card-columns">
        <?php  while($Deporte = $Deportes->fetch_object()):  ?>

        <div class="card">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            <div class="card-body">
            <h5 class="card-title"><b><?=$Deporte->id_categoria ?></b> <?=$Deporte->nombre ?> </h5>
            <p class="card-text">
            Sexo: <?=$Deporte->sexo ?> <br>
            Id_deporte: <?=$Deporte->id_deporte ?> <br>
            Record olimpico: <?=$Deporte->record_olimpico ?> <br>
            Record mundial: <?=$Deporte->record_mundial ?> <br>
            </p>

            <button type="button" class="btn btn-warning"> <a href="index.php?c=categoria&a=mostraruno&id_categoria=<?=$Deporte->id_categoria ?>">Editar</a></button> 
            <!-- <button type="button" class="btn btn-success">Success</button> -->
            <!-- <button type="button" class="btn btn-danger">Danger</button>
            <button type="button" class="btn btn-warning">Warning</button> -->

            </div>
        </div>



        <?php  endwhile;  ?>
        
    </div>
</div>

