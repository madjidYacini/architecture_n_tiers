<?php
session_start();
?>

<?php
$host = 'localhost';

$dbName = 'mydb';

$username = 'root';

$password = '';


$bdd = new PDO("mysql:host=".$host.";dbname=".$dbName, $username, $password);

if (isset($_POST['formConnexion'])){
	$mailConnect = htmlspecialchars($_POST['mailConnect']);
	$mdpConnect = $_POST['mdpConnect'];


	if (!empty($mailConnect) OR !empty($_POST["mdpConnect"])) {
		$requser = $bdd ->prepare("SELECT * from  auteur where Email = ? AND motDePasse = ?");
		$requser ->execute (array($mailConnect , $mdpConnect));
		$userexist = $requser ->rowCount();
		echo $userexist;
		if ($userexist==1) {
			$userinfo =$requser ->fetch();
			$_SESSION['idauteur']= $userinfo['idauteur'];
			header('Location:liste.php?id='.$_SESSION['idauteur']);
		}else{
			$erreur = "Mauvais mail ou mot de passe ";
		}
	}else
	{
		$erreur ="tous les champs doivent etre rempli ";
	}
}
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
