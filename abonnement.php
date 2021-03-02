<!DOCTYPE html>
<html>
<head>
	<title>Mes followers</title>
	<meta charset="utf-8"/>
	<style type="text/css">
		body{
		border: 2px solid black;
		 position: absolute;
		 top:10%;
        right: 20%;
        left: 20%;
        width: 50%;
       padding-left: 7%;
         box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);

      }
      h3{
  color:  #75B000;
      }
      
	</style>
</head>
<body>
	<h3>Vos followings:</h3>
	<?php
    $tab=$_POST['suivre'];
    $link = mysqli_connect("localhost","root","","glowfe") or die("Echec de connexion à la base");
    for($i=0;$i<count($tab);$i++){
       $requete="SELECT nom_prenom,photo FROM user where id=".$tab[$i]."";
       $resultat=mysqli_query($link,$requete);
      $data=mysqli_fetch_assoc($resultat);
       	$nom=addslashes($data['nom_prenom']);
	    $photo=$data['photo'];
       	echo "<tr>";
					echo"<td>";
					echo "<img src=\"photo/$photo\" alt=\"image\" height=50 width=50/>";
					echo "</td>";
					echo"<td>$nom</td>";
		echo"</tr>";
		echo "<br><br>";
       }
    
    ?>
</body>
</html>