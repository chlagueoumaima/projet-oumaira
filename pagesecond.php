<!DOCTYPE html>
<html>
<head>
  <title>page2</title>
  <meta charset="utf-8"/>
  <link href="bootstrap4/css/bootstrap.min.css"
rel="stylesheet" type="text/css">
<style type="text/css">
  body{
        position: relative;
        right: 20%;
        left: 20%;
        width: 50%;
      }
      p{
        font-size: 18px;
        width: 80%;
        text-align: justify;
      }
      #boutton{
        position: absolute;
        bottom: 130px;
        left: 91%;
      }
      #suivant{
        position: absolute;
            bottom: 90%;
            right: 4%;
        border-radius:15px;
        color: white;
        background-color:  #1E90FF;
        height:27px;
        padding-left: 10px;
        padding-right: 10px;
        width: 18%;
      }
      a{
      color: #1E90FF;
      text-decoration: none;
      }
</style>
</head>
<body>
  <form action="pagethird.php" method="post">
   <h1>Personnalisez votre expérience</h1>
   <h2>Suivez les endroits où vous voyez du contenu Twitter sur le web.</h2>
   <p>
    Twitter utilise ces données pour personnaliser votre expérience. Cet historique de navigation ne sera jamais stocké avec votre nom, votre adresse email ou votre numéro de téléphone.
   </p>
   <input type="checkbox" name="boutton" id="boutton" checked="checked" />
   <input type="submit" name="suivant" value="Suivant" id="suivant"/>
   <p>
    Pour plus de détails sur ces paramètres, rendez-vous dans le <a href="centre_assistance.php">Centre d'assistance.</a>
   </p>
</form>
 </body>
</html> 
