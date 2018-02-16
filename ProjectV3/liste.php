<?php
session_start();
include 'liste_traitement.php';
liste();
$id = $_GET["id"];
?>
	</div>
</body>
</html>
<a href="ajout_article.php?id=<?php echo($id)?>">Ajouter un article</a>
<a href="dec.php">deconnexion</a>
<style type="text/css">
table, td, th {
    border: 1px solid black;
}

	#table1 {
    border-collapse: separate;
}
</style>