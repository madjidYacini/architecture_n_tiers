<?php

function ajout_articles(){
$host = 'localhost';

$dbName = 'mydb';

$username = 'root';

$password = '';


$bdd = new PDO("mysql:host=".$host.";dbname=".$dbName, $username, $password);
return  $bdd;
}


?>