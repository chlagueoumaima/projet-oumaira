<?php
$nom=addslashes ($_POST['nom_prenom']);
$email=addslashes ($_POST['mail']);
$date=array($_POST['jours'],$_POST['months'],$_POST['annees']);
print_r($date);
$date_naissance=implode("/",$date);
$link=mysqli_connect("localhost","root","","golden") or die("Echec de connexion à la base");
$sql="INSERT INTO `projet`(`nom_prenom`,`date_naissance`,`mail`) VALUES ('$nom','$date_naissance','$email')";
$result=mysqli_query($link,$sql);
header('Location: page2.php');
?>