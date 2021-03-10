<!DOCTYPE html>
<html>
<head>
    <link href="index.css" rel="stylesheet" type="text/css">
	<meta charset="utf-8"/>
	<title>mini-chat</title>
</head>
<body>

	<form action="enregistrer.php" method="get">
		<div class="con">
		<div class="lab">
		<label  for="pseudo">Pseudo</label>
		<input type="text" name="pseudo" id="pseudo" value=<?php if (isset($_COOKIE['nom'])) {echo $_COOKIE['nom']; } ?>  ><br/><br/>
		</div>

		   
		 
		<br/><br/>

		<div class="lab">
		<label for="message">Message</label>
		<input type="text" name="message" id="message"><br/><br/>
		</div>

		
		<input type="submit" name="Envoyer" class="sub"><br/><br/>
		</div>	
	</form>

	<div class="mess">

<?php 
$link=mysqli_connect("localhost","root","","chat") or die("Echec de connexion à la base");
$sql="SELECT * FROM messages ORDER BY ID_message DESC LIMIT 0 ,10";
   $resultat=mysqli_query($link,$sql);
while ($donnees=mysqli_fetch_assoc($resultat))
{
	echo '<span class=pseu>'.htmlspecialchars($donnees['pseudo']).":".'</span>'.'<span class=msg>'.htmlspecialchars($donnees['message']).'</span>';;
	
	
  print("<br/><br/>");
} 
 ?>
 </div>

</body>

</html>