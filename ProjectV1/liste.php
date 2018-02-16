<?php
session_start();
?>

<?php
$host = 'localhost';

$dbName = 'mydb';

$username = 'root';

$password = '';

$id =$_GET['id'];


$bdd = new PDO("mysql:host=".$host.";dbname=".$dbName, $username, $password);
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


?>


		<?php
if (isset($erreur)) {
	echo '<font color ="red">'.$erreur.'</font>';
}
		?>
	</div>
</body>
</html>
<a href="ajout_article.php?id=<?php echo($id)?>">Ajouter un article</a>

<style type="text/css">
table, td, th {
    border: 1px solid black;
}

	#table1 {
    border-collapse: separate;
}
</style>