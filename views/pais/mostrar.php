 <div class="container">
    <h1 class="jumbotron-heading"> PAISES </h1>
    <hr class="featurette-divider">
    <div class="row">

<?php  while($pais = $paises->fetch_object()):  ?>

            <div class="col-lg-2">
                <img class="rounded-circle" src="views/assets/imaequipo/mundo.jpg" alt="Generic placeholder image" width="50" height="50">
                <p><b><?=$pais->id_pais ?></b> <?=$pais->nombre ?> 
                Participantes: <?=$pais->n_competidores ?></p>
                <button type="button" class="btn btn-warning"> <a href="index.php?c=pais&a=mostraruno&id_pais=<?=$pais->id_pais ?>">Editar</a></button> 

            </div>


<?php  endwhile;  ?> 
    </div>
</div>

