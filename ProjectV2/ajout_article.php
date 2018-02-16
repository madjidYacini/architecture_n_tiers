<?php 
session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<title>Ajout article</title>
</head>
<body>

<div align="center">
		<h2>Ajout de l'article</h2>
		<br><br><br>
		<form method="POST" action="ajout_article_traitement.php">

			<table>
			
				
				<tr>
				<td>
					<label for="Titre">Titre: </label>
				</td>
				<td>
					<input type="text" name="titre" required ="" placeholder="le titre de larticle" >
				</td>
				</tr>
				<tr>
				<td>
					<label for="description">desc: </label>
					
				</td>
				<td>
					<textarea name="description" rows="3" required=""></textarea>
				</td>
				</tr>
				
				<tr>

			</table>
			<tr>
				<td></td>
			<input type="submit" name="Ajout" value="Ajouter">
					<td></td>
				</tr>
		</form>
		<a href="dec.php">deconnexion</a>

		<a href="liste.php?id=<?php echo $_SESSION['idauteur'];?>">consulter</a>
		<?php
if (isset($erreur)) {
	echo '<font color ="red">'.$erreur.'</font>';
}
		?>
	</div>
</body>
</html>