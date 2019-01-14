    <div class="form-group">
        <label for="inputState">id_sede</label>
        <select id="inputState" class="form-control" name="id_sede">
            <?php  while($pais = $paises->fetch_object()):  ?>
                  
        <option value="<?=$pais->id_sede ?>"><?=$pais->nombre_sede ?></option>
            <?php  endwhile;  ?> 
      </select>
    </div>

