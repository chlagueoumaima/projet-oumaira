<?php
$nom_prenom=$_POST['nom_prenom'];
$mail=$_POST['mail'];
$temps=365*24*3600;
setcookie("nom",$nom_prenom,time()+$temps);
setcookie("email",$mail,time()+$temps);
header('location: page2.php');
?>
