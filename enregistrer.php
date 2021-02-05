<?php
$nom=addslashes($_POST['nom_prenom']);
$email=addslashes ($_POST['mail']);
$date=array($_POST['jours'],$_POST['months'],$_POST['annees']);
$date_naissance=implode("/",$date);
$link=mysqli_connect("localhost","root","","glowfe") or die("Echec de connexion à la base");
$sql="INSERT INTO `user`(`nom_prenom`,`mail`,`date_naissance`) VALUES (`$nom`,`$email`,`$date_naissance`)";
$result=mysqli_query($link,$sql);
$temps=365*24*3600;
setcookie("nom",$nom,time()+$temps);
setcookie("email",$email,time()+$temps);
header('Location: page4.php');?>
