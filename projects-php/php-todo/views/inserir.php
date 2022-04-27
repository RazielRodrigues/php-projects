<form method="post" action="model/inserir_anotacao.php" class="container">
  <div class="form-group">
    <div class="col-12">
      <textarea style="margin-top: 5%" rows="12" name="anotacaoUsuario" type="text" class="form-control" placeholder="Digite a sua anotação..."></textarea>
      <br>
      <button type="submit" value="inserir_anotacao" class="btn btn-success col-12">Salvar</button>
    </div>
  </div>
</form>

<form class="container"method="post" action="model/apagar_anotacao.php">
	<div  class="input-group mx-auto container">
	  <select name="dado_deletar" class="custom-select" id="inputGroupSelect04">
		<?php 
				$querySelect = "SELECT * FROM ANOTACAO";
				$resultadoSelect = $conexao->query($querySelect);

					if ($resultadoSelect->num_rows > 0) {
						while ($row = $resultadoSelect->fetch_assoc()) {
						echo '<option value="'.$row['ID_ANOTACAO'].'">'.$row['CONTEUDO'].'</option>';
						}
					}else{
						echo "<option>Sem resultados</option>";
					}
		 ?>
	  </select>
	  <div class="input-group-append">
	    <button class="btn btn-danger" type="submit">Deletar</button>
	  </div>
	</div>
</form>