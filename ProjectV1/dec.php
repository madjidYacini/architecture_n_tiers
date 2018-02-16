<?php

session_start();
session_unset();
session_destroy();
echo $_SESSION['idauteur'];
header('Location:index.php');
?>

