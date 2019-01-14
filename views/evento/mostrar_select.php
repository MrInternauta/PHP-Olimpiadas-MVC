    <div class="form-group">
        <label for="inputState">id_evento</label>
        <select id="inputState" class="form-control" name="id_evento">
            <?php  while($pais = $paises->fetch_object()):  ?>
                  
        <option value="<?=$pais->id_evento ?>"><?=$pais->id_evento ?> <?=$pais->descripcion ?></option>
            <?php  endwhile;  ?> 
      </select>
    </div>

