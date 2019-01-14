 <div class="container">
    <h1 class="jumbotron-heading"> Eventos </h1>
    <hr class="featurette-divider">
    <div class="row">
        <?php  while($pais = $paiss->fetch_object()):  ?>
            <div class="col-lg-2">
             <?php
             #=$pais->id_pais
             ?>
                <img class="rounded-circle" src="views/assets/imaequipo/12.png" alt="Generic placeholder image" width="50" height="50">
                <p><a href="#" class="text-secondary"><b><?=$pais->id_evento ?></b> </a>
                Id sede: <?=$pais->id_sede ?> <br>
                Id Juegos: <?=$pais->id_juegos ?> <br>
                Fecha: <?=$pais->fecha_hora ?> <br>
                Descripcion: <?=$pais->descripcion ?> <br>
               Medalla: <?=$pais->medalla ?> <br>
               Equipo Individual: <?=$pais->equipo_individual ?> <br>
                </p>
                    <button type="button" class="btn btn-warning"> <a href="index.php?c=evento&a=mostraruno&id_evento=<?=$pais->id_evento ?>">Editar</a></button>

            </div>
        <?php  endwhile;  ?>
        
    </div>
</div>

