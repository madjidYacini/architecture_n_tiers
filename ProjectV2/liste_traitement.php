

<?php
$host = 'localhost';

$dbName = 'mydb';

$username = 'root';

$password = '';

$id =$_GET['id'];


$bdd = new PDO("mysql:host=".$host.";dbname=".$dbName, $username, $password);
?>