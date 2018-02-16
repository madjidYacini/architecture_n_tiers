<?php 

require_once '../Modeles/auteurs.php';
function connect ()
{

if (isset($_POST['formConnexion'])){
	$mailConnect = htmlspecialchars($_POST['mailConnect']);
	$mdpConnect = $_POST['mdpConnect'];
	include 'index-traitement-bdd.php';


	$bdd = connexion();
	

	$requser = $bdd ->prepare("SELECT * from  auteur where Email = ? AND motDePasse = ?");
		$requser ->execute (array($mailConnect , $mdpConnect));
	if (!empty($mailConnect) OR !empty($_POST["mdpConnect"])) {

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
}


function deconnexion()
{
	session_start();
session_unset();
session_destroy();

}
?>