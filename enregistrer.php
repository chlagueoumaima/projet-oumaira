<?php


$nom=addslashes ($_POST['nom_prenom']);
$email=addslashes ($_POST['mail']);
$date_naissance=addslashes($_POST['date_naissance']);
$pass=addslashes($_POST['password']);
$link=mysqli_connect("localhost","root","","glowfe") or die("Echec de connexion à la base");
$sql="INSERT INTO `user`(`nom_prenom`,`mail`,`date_naissance`,`password`) VALUES ('$nom','$email','$date_naissance','$pass')";
$result=mysqli_query($link,$sql);

?>