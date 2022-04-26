<section style="margin-top: 5rem;" class="container">
	<a class="btn btn-warning" href="?pagina=inserir_novo_aluno">inserir novo aluno</a>
	<table class="table" id="alunos">
		<thead>
		<tr>
			<th>Nome aluno:</th>
			<th>Data nascimento:</th>
			<th>Deletar</th>
			<th>Editar</th>
		</tr>
		</thead>

		<tbody>
			<?php 


			while ($linha = mysqli_fetch_array($consulta_alunos)) {
				echo "<tr><td>".$linha['NOME_ALUNOS'].'</td>';
				echo "<td>".$linha['DATA_NASCIMENTO'].'</td>';
			 ?>


			<td><a href="deleta_aluno.php?ID_ALUNOS=<?php echo $linha['ID_ALUNOS']; ?>">Deletar</a></td></tr>


			<?php 
				
				}
			 
			 ?>
		</tbody>
	</table>
</section>