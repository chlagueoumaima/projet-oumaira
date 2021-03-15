<?php
session_start();
$mail=$_SESSION['mail'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Mes followers</title>
  <meta charset="utf-8"/>
  <style type="text/css">
    body{
    border: 2px solid black;
     position: absolute;
     top:10%;
        right: 20%;
        left: 20%;
        width: 50%;
       padding-left: 7%;
         box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);

      }
      h3{
  color:  #75B000;
      }

        #suivant{
        position: absolute;
            bottom: 90%;
            right: 4%;

        border-radius:15px;
        color: white;
        background-color:  #75B000;
        margin-top: 100px;
        width: 9%;
        height: 9%;


}
    .sui{
  border: 1px solid white;
  background: #82CDFC;
  position: relative;
  left:590px;

}
  </style>
</head>
<body>
  <h3>Vos followings:</h3>

  <?php

                             include ("connexion.php");

      /* $requete="SELECT * FROM user where mail='$mail'";
       $resultat=mysqli_query($link,$requete);
       
      $data=mysqli_fetch_assoc($resultat);*/

       $requet="SELECT id_following FROM abonnee ,user WHERE abonnee.id_follower= user.id AND  mail='$mail'  ";
       $result=mysqli_query($link,$requet);
      $data=mysqli_fetch_assoc($result);
      $id=$data['id_following'];
        $tab=explode(' ', $id);
        for($i=0;$i<count($tab);$i++){
       $requete="SELECT nom_prenom,photo FROM user where id='".$tab[$i]."'";
       $resultat=mysqli_query($link,$requete);
      $dat=mysqli_fetch_assoc($resultat);
$nom=addslashes($dat['nom_prenom']);
      $photo=$dat['photo'];
        echo "<tr>";
          echo"<td>";
          echo "<img src=\"photo/$photo\" alt=\"image\" height=50 width=50/>";
          echo "</td>";
          echo"<td>$nom</td>"; 
    echo"</tr>";
    echo "<br><br>";
}
?>
<a href="Acceuil.php" id="suivant" class="sui" style=" text-decoration: none;" >Précédant</a>
</body>
</html> 
