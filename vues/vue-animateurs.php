<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>SB - Animateurs</title>
	</head>
	
	<body>
		<a href="/ra/espace">Mon espace</a>
		<a href="/ra/deconnecter">Se déconnecter</a>
		
		<h4>Animateurs</h4>
		
			
			
				
				
		<table>
			<thead>
				<tr>
					<th>NOM</th>
					<th>Prénom</th>
					<th>eMail</th>
				</tr>
			</thead>
			
			<tbody>
				<?php foreach( $animateurs as $unAnimateur ){ ?>
				
					<tr>
						<td><?= $unAnimateur[ 'nom' ] ?></td>
						<td><?= $unAnimateur[ 'prenom' ] ?></td>
						<td><?= $unAnimateur[ 'email' ] ?></td>
					</tr>
				
				<?php } ?>
			</tbody>
			
		</table>
		
	</body>
	
</html>
