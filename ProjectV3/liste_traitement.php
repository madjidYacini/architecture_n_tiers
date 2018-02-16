

<?php
	require_once 'liste_traitement_bdd.php';
	function liste()
	{
		
	
	$bdd = connect();

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



?>