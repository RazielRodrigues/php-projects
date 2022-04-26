<main>
	<table id="anotacoes" class="table table-dark table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Nº</th>
                <th>Conteudo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
				<?php 
					$querySelect = "SELECT * FROM anotacao";
					$resultadoSelect = $conexao->query($querySelect);
					if ($resultadoSelect->num_rows > 0) {
						while ($row = $resultadoSelect->fetch_assoc()) {
							echo "<tr>";
							echo "<th>".$row["id_anotacao"]."</th>";
							echo "<td>".$row["conteudo"]."</td>";
							echo "</tr>";
						}
					}else{
						echo "<th>0</th>";
						echo "<td>Sem resultados</td>";
					}
				?>
            </tr>
		</tbody>
	</table>
</main>