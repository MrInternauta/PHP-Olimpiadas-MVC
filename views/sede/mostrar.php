 <div class="container">
    <h1 class="jumbotron-heading"> SEDES </h1>
    <hr class="featurette-divider">
    <div class="row">
        <?php  while($pais = $paiss->fetch_object()):  ?>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="views/assets/imaequipo/estadio.png" alt="" width="300" height="300">
                <h3 class="card-title"></h3>
                <div class="card-body">
                  <p class="card-text"> <b><?=$pais->id_sede ?></b> <?=$pais->nombre_sede ?>             </p>
                  <p class="card-text">Capacidad: <?=$pais->capacidad ?> <br>
                Ubicacion: <?=$pais->ubicacion ?> <br>
                Ciudad: <?=$pais->ciudad ?> <br>
                Id juegos: <?=$pais->id_juegos ?></p>

                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <button type="button" class="btn btn-warning"> <a href="index.php?c=sede&a=mostraruno&id_sede=<?=$pais->id_sede ?>">Editar</a></button>

                    </div>
                    <small class="text-muted"></small>
                  </div>
                </div>
              </div>
            </div>
        <?php  endwhile;  ?>
        
    </div>
</div>

