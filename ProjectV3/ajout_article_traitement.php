<?php

if (isset($_POST['Ajout'])){
$time = date('Y-m-d H:i:s ');
$title = $_POST['titre'];
$desc = $_POST['description'];

include 'ajout_article_bdd.php';
$bdd = ajout_articles();
$insrtmbr  =$bdd-> prepare("INSERT INTO articles values (DEFAULT,?,?,?,?)");
				$insrtmbr ->execute(array($title,$time,$_SESSION['idauteur'],$desc));


	

			}
?>