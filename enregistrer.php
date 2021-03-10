<?php 
$pseudo=addslashes ($_GET['pseudo']);
$message=addslashes ($_GET['message']);
$link = mysqli_connect("localhost","root","","chat")
or die("Echec de connexion à la base");
$sql="INSERT INTO `messages`(`ID_message`, `pseudo`, `message`) VALUES (0,'$pseudo','$message') " ;
$resultat=mysqli_query($link,$sql);

$temps=365*24*3600;
setcookie("nom",$pseudo,time()+$temps);
header('Location: index.php');
 ?>
 