<?php
$nom=addslashes ($_POST['nom_prenom']);
$email=addslashes ($_POST['mail']);
$date_naissance=addslashes($_POST['date_naissance']);
$link=mysqli_connect("localhost","root","","glowfe") or die("Echec de connexion à la base");
$sql="INSERT INTO `user`(`nom_prenom`,`mail`,`date_naissance`) VALUES ('$nom','$email','$date_naissance')";
$result=mysqli_query($link,$sql);
header('Location: page4.php');
?>