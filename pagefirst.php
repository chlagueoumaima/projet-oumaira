<!DOCTYPE html>
<html>
<head>
  <title>Création du Compte</title>
  <meta charset="utf-8"/>
  <link href="bootstrap4/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <style type="text/css">
  input{
        height: 45px;
        border-color: grey;
        border-width: 1px;
        border-radius: 7px; 
      }
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
      #months{
        height: 45px;
        width: 45%;

      }
      #jours{
        height: 45px;
        width: 20%;
      }
      #annees{
        height: 45px;
        width: 30%;
      }
      #months,#jours,#annees{
        border-color: grey;
        border-width: 1px;
        border-radius: 7px; 
      }
      #suivant{
        position: absolute;
            bottom: 90%;
            right: 4%;
        border-radius:15px;
        color: white;
        background-color:  #AAFF00;
        height:27px;
        padding-left: 10px;
        padding-right: 10px;
        width: 18%;

      }
    </style>
</head>
<body>
  <form action="cook.php" method="post">
  <fieldset>
  <h2>Créer un compte</h2>
  <input type="text" name="nom_prenom" id="nom_prenom" size="66" placeholder="Nom et Prénom" pattern="[A-Z a-z]{3,}" required="required" />
  <br/><br/>
   <input type="email" name="mail" id="mail" placeholder="Entrer votre email" size="66" required="required" />

<h3>Date de naissance</h3>
    <p style="text-align: justify; color:grey;">
      Cette information ne sera pas affichée publiquement. Confirmez votre âge, même si ce compte est pour une entreprise, un animal de compagnie ou autre chose.
    </p>
    <select size="1" name="months"id="months">
    <option name="months"value="mois">Mois</option>
    <option name="months" value="01">Janvier</option>
    <option name="months" value="02">Février</option>
    <option name="months" value="03">Mars</option>
    <option name="months" value="04">Avril</option>
    <option name="months" value="05">Mai</option>
    <option name="months" value="06">Juin</option>
    <option name="months" value="07">Juillet</option>
    <option name="months" value="08">Août</option>
    <option name="months" value="09">Septembre</option>
    <option name="months" value="10">Octobre</option>
    <option name="months" value="11">Novembre</option>
    <option name="months" value="12">Décembre</option>
    </select>

     <?php

  // Parcours du tableau
  
  echo '<select name="jours" id="jours" required="required">';
  echo '<option value="jour">Jour</option>';
  for($i=1; $i<=31; $i++)
  {
      // Afficher la ligne
    echo '<option value='.$i. '>'. $i .'</option>';
  }
  echo '</select>';
?>

    <?php
  // Parcours du tableau
  echo '<select name="annees" id="annees" required="required">';
  echo '<option value="annee">Année</option>';
  for($i=1970; $i<=2021; $i++)
  {
      // Afficher la ligne
    echo '<option value='.$i. ' >'. $i .'</option>';
  }
  echo '</select>';

?>
   <input type="submit" name="suivant" value="Suivant" id="suivant" />
    </fieldset>
  </form>
</body>
</html>