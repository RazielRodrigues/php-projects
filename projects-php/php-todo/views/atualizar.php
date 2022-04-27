<form method="post" action="model/atualizar_anotacao.php" class="container">
  <div class="form-group">
    <div class="col-12">
      <textarea style="margin-top: 5%" rows="12" name="novoTexto" type="text" class="form-control" placeholder="Digite a sua anotação..."></textarea>
    </div>
  </div>
  	<div style="margin-top: 5%;" class="input-group mx-auto container">
	  <select name="id_anotacao" class="custom-select" id="inputGroupSelect04">
		<?php 
				$querySelect = "SELECT * FROM ANOTACAO";
				$resultadoSelect = $conexao->query($querySelect);

					if ($resultadoSelect->num_rows > 0) {
						while ($row = $resultadoSelect->fetch_assoc()) {
						echo '<option value="'.$row['ID_ANOTACAO'].'">'.$row['ID_ANOTACAO'].'</option>';
						}
					}else{
						echo "<option>Sem resultados</option>";
					}
		 ?>
	  </select>
	  <div class="input-group-append">
	    <button class="btn btn-success" type="submit">Atualizar</button>
	  </div>
	</div>
</form>