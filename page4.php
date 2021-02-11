<!DOCTYPE html>
<html lang='fr' dir='ltr'>
<head>
	<meta charset='utf-8'>
	<title>Connectez-vous sur</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style type="text/css">
    
    body{
        position: relative;
        right: 20%;
        left: 20%;
        width: 43%;
      }
      h6{ font-size: 15px;
          font-weight:normal; }
      button{
      	position: absolute;
            bottom: 90%;
            right: 1%;

      }
      	#suivant{
    		position: absolute;
            bottom: 90%;
            right: 4%;

    		border-radius:15px;
    		color: white;
    		background-color:  #75B000;
    		margin-top: 100px;
    		width: 12%;
    		height: 6%;
    </style>

</head>
<body>
	<h1>Il vous faut un mot de passe</h1>
	<h6>Vérifier qu'il contient au moins 8 caractères.</h6>
	<form action="pass.php" method="post">
	<div class="form-group">
			<input type="password" name="password" required="required" pattern=[a-z]{1,8} placeholder="mot de passe" class="form-control" id="motdepasse">
		</div>
			<br>
			  <div class="form-group form-check">
    <label class="form-check-label">
    </label>
			<input type="checkbox" onclick="Afficher()" class="form-check-input">Afficher le mot de passe
		</div>
		<button type="submit" class="btn btn-primary">Suivant</button>
	</form>
	<script>
function Afficher()
{ 
var input = document.getElementById("motdepasse"); 
if (input.type === "password")
{ 
input.type = "text"; 
} 
else
{ 
input.type = "password"; 
} 
} 
</script>





</body>
</html>
