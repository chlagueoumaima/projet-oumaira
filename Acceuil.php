            <?php
                session_start();
                header('Content-Type: text/html; charset=iso-8859-1');
                ?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
           <link rel="stylesheet" type="text/css" href="styleM.css">

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
  .menu a:hover{background-color:#72E55B;
    color: white;}
  .menu a.home{background-color:#72E55B; 
  color: white;}
  .button{ display: block;
  width: 14.9%;
  border-radius: 15px;
  color: white;
background-color:#72E55B;}
.head{position: fixed;
  bottom: 90%;
  right: 17%;
  width: 60%;
  border: 0px white;}
  .vertical-line{
        border-left: 1px solid grey;
        display: inline-block;
        height: 100%;
        margin-left: 20%;
        position: absolute;
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
                
                if($_SESSION['mail'] !== "" && $_SESSION['mail'] !== "" ){
                             include ("connexion.php");

    
        $requete = "SELECT * FROM user where  mail = '".$_SESSION['mail']."' ";       
        $exec_requete = mysqli_query($link,$requete);
        $reponse      = mysqli_fetch_assoc($exec_requete);
        $photo=$reponse['photo'];
        $reponse['nom_prenom'];


          
                    
                    
        echo "<img class=pseu src=\"photo/$photo\" alt=\"image\" height=50 width=50/>";
                  echo '<span style="font-size:20px;font-weight=bold;padding=5px;"  >'. $reponse['nom_prenom'].'</span>';
                   


                }
            ?>
</div>
<div class="post">
  <?php
// on se connecte à notre base
include('connexion.php');

$sql = "SELECT  texte_news,nom_prenom FROM news,user WHERE  news.id_user=user.id  ";
$result=mysqli_query($link,$sql);


$nb_news = mysqli_num_rows($result);
if ($nb_news == 0) {
  echo 'Aucune news enregistrée.';
}
else {
  // si on a au moins une news, on l'affiche
  while ( $data = mysqli_fetch_array($result))
   {
  echo  '<span style="font-size:20px;font-weight=bold;padding=5px;color:#006400;"  >'.$data['nom_prenom'].'</span>' ;
  echo "</br>";


  echo  '<span style="font-size:15px;padding=5px;"  >'.$data['texte_news'].'</span>' ;
  echo "</br>";
    echo "_____________________________________________________________________________________________________";
    echo "</br>";
  }
}

?>
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
	<a href="abo.php"><i class="material-icons"style="top:8px;position: relative">bookmark_border</i>Signets</a>
	<a href="follow.php"><i class="material-icons"style="top:8px;position: relative">list_alt</i>Listes</a>
	<a href="profil.php"><i class="material-icons"style="top:8px;position: relative">person</i>Profil</a>
	<a href="#"><i class="material-icons"style="top:8px;position: relative">add_circle_outline</i>Plus</a>
    <a href="deconnection.php"><i class="material-icons"style="top:8px;position: relative">lock</i>se deconnecter</a>

</div>
<button class="button"><a style="text-decoration: none;color: white;" href="Insert_news.php">Publier</a></button>
</nav>


</form>
</body>
</html>



