<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Connectez-vous sur</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="stylee.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
<h1>Créer votre compte</h1>
<form action="enre.php" method="post" enctype="multipart/form-data" >

<div class="group">
        <div class="form-group">
  	
            <label for="nom_prenom">Nom:</label>
             <input type="text" name="nom_prenom" class="form-control" size="66" id="nom_prenom" value="<?php echo $_COOKIE['nom'] ?>">
         </div>


         <div class="form-group">
             <label for="mail">Email:</label>
             <input type="Email" name="mail" class="form-control" id="mail" size="66" value="<?php echo $_COOKIE['email'] ?>">
         </div>

         <div class="form-group">
              <label for="date_naissance">Date de naissance:</label>
             <input type="text" name="date_naissance" class="form-control" id="date_naissance" size="66" value="<?php echo $_COOKIE['date']?>">
         </div>

         <div class="form-group form-check">
               <label class="form-check-label">
               <input id="pas"  class="form-check-input" type="checkbox">    Remember me
               </label>
         </div>

         
<p>En vous inscrivant,vous acceptez les <a href="Conditions.html"> Conditions d'utilisation</a> et <a href="Politique.html"> la Politique de confidentialité</a>,ainsi que l'<a href="cookies.html">utilisation des cookies</a>.Les utilisateurs pourront vous trouvez grâce à votre adresse email et à votre numéro de téléphone,si vous les avez fournis.<a href="confidentialite.html">Options de confidentialité</a>.</p>
<a href="#suivant1"  class="btn btn-primary">Suivant</a>

</div>

<br/><br/>


 <div class="pass">  	
 	<a id="suivant1">
	<h1>Il vous faut un mot de passe</h1>
	<h6>Vérifier qu'il contient au moins 8 caractères.</h6>
	<div class="form-group">
			<input type="password" name="password" required="required" pattern=[a-z]{1,8} placeholder="mot de passe" class="form-control" id="motdepasse">
		</div>
			<br>
			  <div class="form-group form-check">
    <label class="form-check-label">
    </label>
			<input id="pas" type="checkbox" onclick="Afficher()" class="form-check-input">Afficher le mot de passe
		</div>
<a href="#suivant2"  class="btn btn-primary">Suivant</a>
	
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
     
</div>


<a href="#suivant3">Passer pour le moment</a>
<div class="ph">
  <a id="suivant2">

<h1>Choisissez une image de profil</h1>
    <h6>Vous avez un selfie préféré ? Téléchargez-le vite !</h6><br/><br>
    <input type="file" name="fichier" size="60"/>
<a href="#suivant3" class="btn btn-primary">Suivant</a>
   


  <div class="tet">

 <a id="suivant3">

  <h1>Décrivez-vous</h1>
  <p>
    Qu'est-ce qui fait vous une personne spéciale ? Ne réfléchissez pas trop et amusez-vous.
  </p>

  <textarea  name="decrire" placeholder="Votre biographie                  1/160" id="dec"></textarea>
 <a href="#suivant4"  class="btn btn-primary">Suivant</a>
 
</div>



 <a id="suivant4">

<div class="content">
	<h2>Quels sont les sujets qui vous intéressent ? </h2> 
	<p>Sélectionnez des sujets qui vous intéressent afin de personnaliser votre expérience ### , notammant pour trouver des perssonnes à suivre.</p>
	
            


                     
						<h3>Politique</h3>
						<div class="centre">
						<input class="checkbox-budget" type="checkbox" name="centre[]" id="polia" value="plotique local" >
						<label class="for-checkbox-budget"  for="polia">
							<span >plotique local</span>
						</label>
						<input class="checkbox-budget" type="checkbox" name="centre[]" id="polib" value=" politique internationnal">
						<label class="for-checkbox-budget"  for="polib">							
							<span >politique internationnal</span>
						</label>
						<input class="checkbox-budget" type="checkbox" name="centre[]" id="polic" value="Politiciens">
						<label class="for-checkbox-budget" for="polic">							
							<span >Politiciens</span>
						</label>
					</div>



                        
						<h3>Sports</h3>
						<div class="centre">
						<input class="checkbox-budget" type="checkbox" name="centre[]" id="sporta" value="Sports locaux" >
						<label class="for-checkbox-budget"  for="sporta">
							<span >Sports locaux</span>
						</label>
						<input class="checkbox-budget" type="checkbox" name="centre[]" id="sportb" value="Football">
						<label class="for-checkbox-budget"  for="sportb">							
							<span >Football</span>
						</label>
						<input class="checkbox-budget" type="checkbox" name="centre[]" id="sportc" value="Basketball">
						<label  class="for-checkbox-budget" for="sportc">							
							<span >Basketball</span>
						</label>
					</div>

                       
       					<h3>Musique</h3>
                        <div class="centre">
						<input class="checkbox-budget" type="checkbox" name="centre[]" id="musica" value="Musique classique">
						<label class="for-checkbox-budget" for="musica">							
							<span >Musique classique</span>
						</label>
						<input class="checkbox-budget" type="checkbox" name="centre[]" id="musicb" value="Rock N Roll">
						<label class="for-checkbox-budget" for="musicb">							
							<span >Rock N Roll</span>
						</label>
						<input class="checkbox-budget" type="checkbox" name="centre[]" id="musicc" value="Rap">
						<label class="for-checkbox-budget" for="musicc">							
							<span >Rap</span>
						</label>
						<input class="checkbox-budget" type="checkbox" name="centre[]" id="musicd" value="Pop">
						<label class="for-checkbox-budget" for="musicd">							
							<span >Pop</span>
						</label>						
                         </div>


                       

						<h3>TV & Movies</h3>
						 <div class="centre">
						<input class="checkbox-budget" type="checkbox" name="centre[]" id="tva" value="films" >
						<label class="for-checkbox-budget" for="tva">
							<span >Films</span>
						</label>
						<input class="checkbox-budget" type="checkbox" name="centre[]" id="tvb" value="serie">
						<label class="for-checkbox-budget" for="tvb">							
													
							<span >Sésies</span>
						</label>
						<input class="checkbox-budget" type="checkbox" name="centre[]" id="tvc" value="anime">
						<label class="for-checkbox-budget" for="tvc">							
							<span >Anime</span>
						</label>
					</div>


                       

						<h3>La Mode</h3>
						<div class="centre">
						<input class="checkbox-budget" type="checkbox" name="centre[]" id="modea" value="marque" >
						<label class="for-checkbox-budget" for="modea">
							<span >Les marques</span>
						</label>
						<input class="checkbox-budget" type="checkbox" name="centre[]" id="modeb" value="Style vestimentaire">
						<label class="for-checkbox-budget" for="modeb">							
							<span >Style vestimentaire</span>
						</label>
						<input class="checkbox-budget" type="checkbox" name="centre[]" id="modec" value="stylistes">
						<label class="for-checkbox-budget" for="modec">							
							<span >Les stylistes</span>
						</label>
					</div>
        
       </div>

    <button type="submit" class="btn btn-primary">Suivant</button>

</form>
</body>
</html>
