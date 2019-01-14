 <div class="container">
    <h1 class="jumbotron-heading"> MODIFICAR DEPORTE </h1>
    <hr class="featurette-divider">
    <div class="row">
        <?php  while($pais = $Deportes->fetch_object()):  ?>
            <div class="col-lg-2">
             <?php
             #=$pais->id_pais
             ?>
                <img class="rounded-circle" src="views/assets/imaequipo/deportes.png" alt="Generic placeholder image" width="50" height="50">
                <p><a href="#" class="text-secondary"><b><?=$pais->id_deporte ?></b> - <?=$pais->nombre ?>  </a></p>
                <button type="button" class="btn btn-warning"> <a href="index.php?c=deporte&a=mostraruno&id_deporte=<?=$pais->id_deporte ?>">Editar</a></button> 

            </div>
        <?php  endwhile;  ?>
        
    </div>
</div>

