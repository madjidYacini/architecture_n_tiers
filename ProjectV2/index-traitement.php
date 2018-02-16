<?php
include('index.php');
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
