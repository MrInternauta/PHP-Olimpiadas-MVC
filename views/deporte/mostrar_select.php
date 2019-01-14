    <div class="form-group">
        <label for="inputState">id_deporte</label>
        <select id="inputState" class="form-control" name="id_deporte">
            <?php  while($pais = $paises->fetch_object()):  ?>
                  
        <option value="<?=$pais->id_deporte ?>"><?=$pais->nombre ?></option>
            <?php  endwhile;  ?> 
      </select>
    </div>

