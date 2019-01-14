    <div class="form-group">
        <label for="inputState">id_categoria</label>
        <select id="inputState" class="form-control" name="id_categoria">
            <?php  while($pais = $paises->fetch_object()):  ?>
                  
        <option value="<?=$pais->id_categoria ?>"><?=$pais->id_categoria ?> <?=$pais->nombre ?></option>
            <?php  endwhile;  ?> 
      </select>
    </div>

