 <div class="container">
    <h1 class="jumbotron-heading"> Resultados </h1>
    <hr class="featurette-divider">
    <div class="row">
        <?php  while($pais = $paiss->fetch_object()):  ?>
            <div class="col-lg-2">
             <?php
             #=$pais->id_pais
             ?>
                <img class="rounded-circle" src="views/assets/imaequipo/12.png" alt="Generic placeholder image" width="50" height="50">
                <p><a href="#" class="text-secondary"><b><?=$pais->id_result ?></b> </a>
                Id pais: <?=$pais->id_pais ?> <br>
                Equipo Individual: <?=$pais->id_evento ?> <br>
                Equipo Individual: <?=$pais->equipo_individual ?> <br>
                Id sede: <?=$pais->id_pais ?> <br>
                Id Juegos: <?=$pais->id_juegos ?> <br>
                Descripcion: <?=$pais->puntaje ?> <br>
               Medalla: <?=$pais->descripcion ?> <br>
               
                </p>
                    <button type="button" class="btn btn-warning"> <a href="index.php?c=resultado&a=mostraruno&id_result=<?=$pais->id_result ?>">Editar</a></button>
                   <button type="button" class="btn btn-danger"> <a href="index.php?c=resultado&a=borrar&id_result=<?=$pais->id_result ?>">Borrar</a></button> 

            </div>
        <?php  endwhile;  ?>
        
    </div>
</div>

