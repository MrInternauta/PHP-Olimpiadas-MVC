 <div class="container">
    <h1 class="jumbotron-heading"> PARTICIPANTES </h1>
    <hr class="featurette-divider">
    <div class="row">
        <?php  while($pais = $paiss->fetch_object()):  ?>
            <div class="col-lg-2">
             <?php
             #=$pais->id_pais
             ?>
                <img class="rounded-circle" src="views/assets/imaequipo/person-male.png" alt="Generic placeholder image" width="50" height="50">
                <p><a href="#" class="text-secondary"><b><?=$pais->id_participante ?></b> <?=$pais->nombre ?></a>
                Id Pais: <?=$pais->id_pais ?> <br>
                 Record: <?=$pais->record ?> <br>
                  Fecha Nacimiento: <?=$pais->fecha_nac ?> <br>
                  Descripcion: <?=$pais->descripcion ?> <br>
                </p>

            <button type="button" class="btn btn-warning"> <a href="index.php?c=participante&a=mostraruno&id_participante=<?=$pais->id_participante ?>">Editar</a></button>
            <button type="button" class="btn btn-danger"> <a href="index.php?c=participante&a=borrar&id_participante=<?=$pais->id_participante ?>">Borrar</a></button> 
            </div>
        <?php  endwhile;  ?>
        
    </div>
</div>

