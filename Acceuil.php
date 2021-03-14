<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>          </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<style>

 
		.menu{width:200px;
			position: relative;
		}
		.menu a{background-color:white; 
  color: black; 
  display: block; 
  padding: 12px; 
  text-decoration: none;}
  .menu a:hover{background-color:#DCDCFF;}
  .menu a.home{background-color:#DCDCFF; 
  color: white;}
  .button{ display: block;
  width: 14.9%;
  border-radius: 15px;
  color: white;
background-color:#3C3CEB;}
.head{position: fixed;
  bottom: 90%;
  right: 17%;
  width: 60%;
  border: 1px grey;}
  .vertical-line{
        border-left: 1px solid grey;
        display: inline-block;
        height: 100%;
        margin-left: 20%;
        position: absolute;
      }
.img{
	}
	




	</style>

</head>
<body>
	<form action="">
<div class="head">
	<span class="material-icons"style="left:100%;top:35px;position: relative;">auto_awesome</span>
	<h5>Acceuil</h5>
	<hr>
            <?php
                session_start();
                if($_SESSION['mail'] !== "" && $_SESSION['mail'] !== "" ){
                        $link = mysqli_connect("localhost","root","","glowfe")
           or die('could not connect to database');
    
        $requete = "SELECT * FROM user where  mail = '".$_SESSION['mail']."' ";       
        $exec_requete = mysqli_query($link,$requete);
        $reponse      = mysqli_fetch_assoc($exec_requete);
        $photo=$reponse['photo'];
        $reponse['nom_prenom'];


          
                    
                    // afficher un message
                  echo  $reponse['nom_prenom'];
                   echo "<img src=\"photo/$photo\" alt=\"image\" height=40 width=40/>";


                }
            ?>
</div>
<div>
</div>
<div class="center">
	</div>
<span class="vertical-line"></span>
	<nav>
	<div class="menu">
	<a href="#"	class="home"><i class="material-icons"style="top:8px;position: relative">home</i>Accueil</a>
	<a href="#"><i class="material-icons" style="top:8px;position: relative">explore</i>Explorer</a>
	<a href="#"><i class="material-icons" style="top:8px;position: relative">notifications</i>Notifications</a>
	<a href="messagerie.php"><i class="material-icons"style="top:8px;position: relative"style="top:8px;position: relative">message</i>Messages</a>
	<a href="abonne.php"><i class="material-icons"style="top:8px;position: relative">bookmark_border</i>Signets</a>
	<a href="follow.php"><i class="material-icons"style="top:8px;position: relative">list_alt</i>Listes</a>
	<a href="#"><i class="material-icons"style="top:8px;position: relative">person</i>Profil</a>
	<a href="#"><i class="material-icons"style="top:8px;position: relative">add_circle_outline</i>Plus</a>
    <a href="deconnection.php"><i class="material-icons"style="top:8px;position: relative">lock</i>se deconnecter</a>

</div>
<button class="button">Tweeter</button>
</nav>


</form>
</body>
</html>



