<!DOCTYPE html>
<html lang='fr' dir='ltr'>
<head>
	<meta charset='utf-8'>
	<title>Connectez-vous sur</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style type="text/css">
    
    body{
        margin-top: 20px;
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
       bottom: 180px;
       right: 4%;

        border-radius:15px;
        color: white;
        background-color: #AAFF00;
        margin-top: 100px;
        width: 18%;
        height:27px;

      }
    </style>

</head>
<body>
	<h1>Il vous faut un mot de passe</h1>
	<h6>Vérifier qu'il contient au moins 8 caractères.</h6>
	<form action="page5.php" method="post">
	<div class="form-group">
			<input type="password" name="password" required="required" pattern="[a-z 0-9]{8,10}" placeholder="mot de passe" class="form-control" id="password">
		</div>
			<br>
			  <div class="form-group form-check">
    <label class="form-check-label">
    </label>
			<input type="checkbox" onclick="Afficher()" class="form-check-input">Afficher le mot de passe
          <button type="submit" name="suivant" id="suivant" >Suivant</button>

		</div>
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
