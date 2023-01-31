<h1>Infterface administrateur</h1>
<hr>

	<h2>Liste des employes </h2>
	<hr /><br /><br />
	<table border="1px">
		<th>nom et prenom</th>
		<th>entite</th>
		<th>matricule</th>
		<th>nom et prenom</th>
		<th>fonction</th>
		<th>cin</th>
		<th>tel</th>

		<?php	
			foreach ($variables["info"] as $e) {	?>
			<tr>
				<td>
				
					<?= $e["nbr"]  ?>
				</a></td>
				<td>
					<?= $e["entite"]?>
				</a></td>
				<td>
					<?= $e["matricule"]?>
				</a></td>
				<td>
					<?= $e["nomComp"]?>
				</a></td>
				<td>
					<?= $e["fct"]?>
				</a></td>
				<td>
					<?= $e["cin"]?>
				</a></td>
				<td>
					<?= $e["tel"]?>
				</a></td>

			
			</tr> 
		<?php }	?> 
	</table>