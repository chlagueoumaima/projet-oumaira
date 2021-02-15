<?php
$nom_prenom=$_POST['nom_prenom'];
$mail=$_POST['mail'];
$date=array($_POST['jours'],$_POST['months'],$_POST['annees']);
$date_naissance=implode("/",$date);
$temps=365*24*3600;
setcookie("nom",$nom_prenom,time()+$temps);
setcookie("email",$mail,time()+$temps);
setcookie("date",$date_naissance,time()+$temps);
header('location: pagesecond.php');
?>