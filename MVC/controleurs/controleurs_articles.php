<?php
require_once '../Modeles/articles.php';
function lister()
{

	$bdd = lister();

	$id =$_GET['id'];

	$requser = $bdd ->prepare("SELECT * from  articles where auteur_idauteur = ?");
		$requser ->execute (array($id));

				echo"<h1>les articles
		</h1>";
echo
"<table id ='table1'>";
echo "<tr>
<th> titre </th>
<th> date creation</th>
  <th> description </th>
  
    </tr>";
		while ($donnees = $requser->fetch())
{
    echo"<tr><td> $donnees[Titre] </td><td>$donnees[date_creation]</td><td>$donnees[description]</td></tr> ";
}
echo "</table>";

}

function ajouter()
{
	if (isset($_POST['Ajout'])){
$time = date('Y-m-d H:i:s ');
$title = $_POST['titre'];
$desc = $_POST['description'];

include 'ajout_article_bdd.php';
$bdd = ajout_articles();
$insrtmbr  =$bdd-> prepare("INSERT INTO articles values (DEFAULT,?,?,?,?)");
				$insrtmbr ->execute(array($title,$time,$_SESSION['idauteur'],$desc));


	

			}
}

}

?>