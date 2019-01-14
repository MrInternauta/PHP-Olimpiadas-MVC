    <div class="form-group">
        <label for="inputState">id_participante</label>
        <select id="inputState" class="form-control" name="id_participante">
            <?php  while($pais = $paises->fetch_object()):  ?>
                  
        <option value="<?=$pais->id_participante ?>"><?=$pais->nombre ?></option>
            <?php  endwhile;  ?> 
      </select>
    </div>

