<?php

$pass=addslashes($_POST['password']);


$link=mysqli_connect("localhost","root","","glowfe") or die("Echec de connexion à la base");

$sqle="SELECT `id` FROM `user`";
$sql="INSERT INTO `password`(`password`)  VALUES (`$pass`)";
$result=mysqli_query($link,$sql);
?>