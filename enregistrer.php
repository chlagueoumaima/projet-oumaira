<?php 
$nom=addslashes ($_POST['nom_prenom']);

$link=mysqli_connect("localhost","root","","glowfe") or die("Echec de connexion à la base");
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
		$nom_photo=$nom.".".$extension_upload;
		if(!move_uploaded_file($temp_name,$dossier.$nom_photo)){
		exit("Problem dans le telechargement de l'image, Ressayez");
		}
		$ph_name=$nom_photo;
	}
	else{
		$ph_name="inconnu.jpg";
	
}
$bing=$_GET["centre"];


$string=implode(",",$bing);
$nom=addslashes ($_POST['nom_prenom']);
$email=addslashes ($_POST['mail']);
$date_naissance=addslashes($_POST['date_naissance']);
$pass=addslashes($_POST['password']);
$decrire=addslashes($_POST['decrire']);

$sql="INSERT INTO `user`(`nom_prenom`,`mail`,`date_naissance`,`password`, `photo`, `decrire`,`centre`) VALUES ('$nom','$email','$date_naissance','$pass','$ph_name','$decrire','$string')";
$result=mysqli_query($link,$sql);

?>