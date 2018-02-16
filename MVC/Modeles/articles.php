<?php

function lister()
{
	 $host = 'localhost';

$dbName = 'mydb';

$username = 'root';

$password = '';

$bdd = new PDO("mysql:host=".$host.";dbname=".$dbName, $username, $password);

return $bdd;
}


function ajouter()
{
	$host = 'localhost';

$dbName = 'mydb';

$username = 'root';

$password = '';


$bdd = new PDO("mysql:host=".$host.";dbname=".$dbName, $username, $password);
return  $bdd;
}

?>