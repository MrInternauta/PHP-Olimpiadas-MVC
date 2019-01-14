    <div class="form-group">
        <label for="inputState">id_juegos</label>
        <select id="inputState" class="form-control" name="id_juegos">
            <?php  while($pais = $paises->fetch_object()):  ?>
                  
        <option value="<?=$pais->id_juegos ?>"><?=$pais->nombre ?></option>
            <?php  endwhile;  ?> 
      </select>
    </div>

