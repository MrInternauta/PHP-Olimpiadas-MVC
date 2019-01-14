 <div class="container">
    <h1 class="jumbotron-heading"> JUECES </h1>
    <hr class="featurette-divider">
    <div class="row">
        <?php  while($pais = $paiss->fetch_object()):  ?>
            <div class="col-lg-2">
             <?php
             #=$pais->id_pais
             ?>
                <img class="rounded-circle" src="views/assets/imaequipo/12.png" alt="Generic placeholder image" width="50" height="50">
                <p><a href="#" class="text-secondary"><b><?=$pais->id_juez ?></b> <?=$pais->nombre ?></a><br>
                Id deporte: <?=$pais->id_pais ?> <br>
                Id pais: <?=$pais->id_pais ?>
                </p>
            <button type="button" class="btn btn-warning"> <a href="index.php?c=juez&a=mostraruno&id_juez=<?=$pais->id_juez ?>">Editar</a></button>
            <button type="button" class="btn btn-danger"> <a href="index.php?c=juez&a=borrar&id_juez=<?=$pais->id_juez ?>">Borrar</a></button> 
 
            <!-- <button type="button" class="btn btn-success">Success</button> -->
            <!-- <button type="button" class="btn btn-danger">Danger</button>
            <button type="button" class="btn btn-warning">Warning</button> -->
                
            </div>
        <?php  endwhile;  ?>
        
    </div>
</div>

