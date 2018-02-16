<?php
include("ajout_article.php");
$host = 'localhost';

$dbName = 'mydb';

$username = 'root';

$password = '';


$bdd = new PDO("mysql:host=".$host.";dbname=".$dbName, $username, $password);

if (isset($_POST['Ajout'])){
$time = date('Y-m-d H:i:s ');
$title = $_POST['titre'];
$desc = $_POST['description'];
echo  $title;


	$insrtmbr  =$bdd-> prepare("INSERT INTO articles values (DEFAULT,?,?,?,?)");
				$insrtmbr ->execute(array($title,$time,$_SESSION['idauteur'],$desc));

			}
?>