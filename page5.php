<?php 
include('connexion.php');

	if(isset($_FILES['fichier']) and $_FILES['fichier']['error']==0)
	{
		$dossier= 'photo/';
		$temp_name=$_FILES['fichier']['tmp_name'];
		if(!is_uploaded_file($temp_name))
		{
		exit("le fichier est untrouvable");
		}
		if ($_FILES['fichier']['size'] >= 1000000){
			exit("Erreur, le fichier est volumineux");
		}
		$infosfichier = pathinfo($_FILES['fichier']['name']);
		$extension_upload = $infosfichier['extension'];
		
		$extension_upload = strtolower($extension_upload);
		$extensions_autorisees = array('png','jpeg','jpg');
		if (!in_array($extension_upload, $extensions_autorisees))
		{
		exit("Erreur, Veuillez inserer une image svp (extensions autorisées: png)");
		}
		$nom_photo=$numapp.".".$extension_upload;
		if(!move_uploaded_file($temp_name,$dossier.$nom_photo)){
		exit("Problem dans le telechargement de l'image, Ressayez");
		}
		$ph_name=$nom_photo;
	}
	else{
		$ph_name="inconnu.jpg";
	}
	$requette="INSERT INTO etudiant VALUES('$numapp','$nom','$prenom','$ph_name')";
	$resultat=mysqli_query($link,$requette);
	header('location: decrire.html');
}
?>
<!doctype html>  
<head>
<meta ontent="text/html" ; charset="UTF-8">
<link rel="stylesheet" href="style.css" /> 
<title>Ajoutez une photo</title>
<a href="page6.html"><p id="lien">Passer pour le moment<p></a>
<h2>Choisissez une image de profil</h2>
</head>
<body>
	<form method="post" id="monform" enctype="multipart/form-data">
		<label for="fichier">Vous avez un selfie préféré ? Téléchargez-le vite !</label><br/><br>
		<input type="file" name="fichier"/>
	</form>
</body>
</html>