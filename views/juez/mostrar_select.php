    <div class="form-group">
        <label for="inputState">id_juez</label>
        <select id="inputState" class="form-control" name="id_juez">
            <?php  while($pais = $paises->fetch_object()):  ?>
                  
        <option value="<?=$pais->id_juez ?>"><?=$pais->nombre ?></option>
            <?php  endwhile;  ?> 
      </select>
    </div>

