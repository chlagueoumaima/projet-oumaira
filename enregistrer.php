<?php 
//Connexion a la base de donnnees.
$Link=mysqli_connect("localhost","root","","minichat") or die("Echec de connexion a la base");
$pseudo=addslashes($_POST['pseudo']);
$message=addslashes($_POST['message']);
$sql="INSERT INTO `message`(`ID`,`pseudo`,`message`) VALUES (0,'$pseudo','$message')";
$result=mysqli_query($Link,$sql);
$temps=365*24*3600;
setcookie("nom",$pseudo,time()+$temps);
header("location:index.php");
?>