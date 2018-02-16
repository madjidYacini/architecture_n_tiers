<?php
session_start();
include 'index-traitement.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>ProjectV1</title>
	<meta charset="utf-8">
</head>
<body>
	<div align="center">
		<h2>connexion</h2>
		<br><br><br>
		<form method="POST" action="">

			<table>
			
				
				<tr>
				<td>
					<label for="mail">mail: </label>
				</td>
				<td>
					<input type="email" name="mailConnect" placeholder="votre mail" 
					>
				</td>
				</tr>
				<tr>
				<td>
					<label for="mot de passe ">mot de passe : </label>
				</td>
				<td>
					<input type="password" name="mdpConnect" placeholder="votre mot de passe " >
				</td>
				</tr>
				
				<tr>

			</table>
			<tr>
				<td></td>
			<input type="submit" name="formConnexion" value="Je me connecte">
					<td></td>
				</tr>
		</form>
		
		<?php
if (isset($erreur)) {
	echo '<font color ="red">'.$erreur.'</font>';
}
		?>
	</div>
</body>
</html>
