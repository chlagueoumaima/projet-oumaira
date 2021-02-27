<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<meta charset="utf-8">
	<style>
		label{display:inline-block;
		      width:150px;}
		.pseudo{ color:red;
		         text-transform: capitalize;
		         width:100px;
		         display:inline-block; }
		#button{margin-left: 80px;}
	</style>
</head>
<body>
	<form action="enregistrer.php" method="POST">
		<label for="pseudo">Pseudo:</label>
		<input type="text" name="pseudo" id="pseudo" value=<?php if(isset($_COOKIE['nom'])){echo $_COOKIE['nom'];}?>><br>
		<label for="message">Message:</label>
		<input type="text" name="message" id="message"><br>
		<input type="submit" value="Envoyer" id="button">
	</form>
<?php 
//Connexion a la base de donnnees.
$Link=mysqli_connect("localhost","root","","minichat") or die("Echec de connexion a la base");
$sql=("SELECT * FROM `minichat` ORDER BY `ID` DESC LIMIT 0,10");
$result=mysqli_query($Link,$sql);
while($data=mysqli_fetch_assoc($result))
{
	echo '<span class="pseudo>'.htmlspecialchars($data['pseudo']).'</span>:'.htmlspecialchars($data['message']);
}
?>
</body>
</html>