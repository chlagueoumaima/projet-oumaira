<?php
session_start();
$prenom=$_SESSION['nom_prenom'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Suggéstion d'abonnement</title>
	<meta charset="utf-8"/>
	<link href="bootstrap4/css/bootstrap.min.css"
rel="stylesheet" type="text/css">
<style type="text/css">
	body{
		margin-top: 5%;
		margin-left: 28%;
	}
	#abonnement{
		position: absolute;
            bottom: 90%;
            right: 4%;

    		border-radius:15px;
    		color: white;
    		background-color:  #75B000;
    		margin-top: 100px;
    		width: 12%;
    		height: 6%;
	}

</style>
</head>
<body>
	<form method="post" action="abonnement.php">
		<h1>Suggestions d'abonnements</h1>
		<p style="text-align: justify;">
			Quand vous suivez quelqu'un, vous voyez ses Tweets dans votre fil d'actualités.
		</p>
		<h2><strong>Vous pourriez être intéressé par</strong></h2>
<table  cellspacing="8" cellpadding="8">
			<?php
			$link = mysqli_connect("localhost","root","","glowfe") or die("Echec de connexion à la base");
				$requette="SELECT id,nom_prenom,photo FROM user where nom_prenom!='$prenom'";
				$resultat=mysqli_query($link,$requette);
				while ($data=mysqli_fetch_assoc($resultat)) {
				
					$nom=addslashes($data['nom_prenom']);
					$photo=$data['photo'];
					$id=$data['id'];
					if($nom!="" and $photo!=""){
					echo "<tr>";
					echo"<td>";
					echo "<img src=\"photo/$photo\" alt=\"image\" height=60 width=60/>";
					echo "</td>";
					echo"<td>$nom</td>";
					echo"<td>";
					echo '<input type="checkbox" name="suivre[]" id="suivre" value='.$id. ' >' ; 
                    
					echo "<span>Suivre</span>";
					echo "</td>";
					echo "</tr>";
				}

			}
			echo '<input type="submit" value="Suivant" name="abonnement" id="abonnement"/>';
				?>
			
</table>
</form>
 
</body>
</html>
