    <div class="form-group">
        <label for="inputState">id_pais</label>
        <select id="inputState" class="form-control" name="id_pais">
            <?php  while($pais = $paises->fetch_object()):  ?>
                  
        <option value="<?=$pais->id_pais ?>"><?=$pais->nombre ?></option>
            <?php  endwhile;  ?> 
      </select>
    </div>

