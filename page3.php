<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Connectez-vous sur</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style type="text/css">
     a{
        color:  #1E90FF;
        text-decoration: none;
        font-weight: bold;
      }
      body{
        position: relative;
        right: 20%;
        left: 20%;
        width: 43%;
      }
    </style>
</head>
<body>
<h1>Créer votre compte</h1>
<form action="enregistrer.php" method="post">
  <div class="form-group">
    <label for="nom_prenom">Nom:</label>
    <input type="text" name="nom_prenom" class="form-control" size="66" id="nom_prenom" value=<?php echo $_COOKIE['nom'] ?>>
  </div>
  <div class="form-group">
    <label for="mail">Email:</label>
    <input type="Email" name="mail" class="form-control" id="mail" size="66" value=<?php echo $_COOKIE['email'] ?>>
  </div>
  <div class="form-group">
    <label for="date_naissance">Date de naissance:</label>
    <input type="text" name="date_naissance" class="form-control" id="date_naissance" size="66" va>
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
<p>En vous inscrivant,vous acceptez les <a href="Conditions.html"> Conditions d'utilisation</a> et <a href="Politique.html"> la Politique de confidentialité</a>,ainsi que l'<a href="cookies.html">utilisation des cookies</a>.Les utilisateurs pourront vous trouvez grâce à votre adresse email et à votre numéro de téléphone,si vous les avez fournis.<a href="confidentialite.html">Options de confidentialité</a>.</p>
<button type="submit" class="btn btn-primary">S'inscrire</button>
</div>
</form>
</body>
</html>
