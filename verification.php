<?php
session_start();
if(isset($_POST['mail']) && isset($_POST['password']))
{
    // connexion à la base de données
    $link = mysqli_connect("localhost","root","","glowfe")
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $mail = mysqli_real_escape_string($link,htmlspecialchars($_POST['mail'])); 
    $password = mysqli_real_escape_string($link,htmlspecialchars($_POST['password']));
    
    if($mail !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM user where 
              mail = '".$mail."' and password = '".$password."' ";
        $exec_requete = mysqli_query($link,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // email et mot de passe correctes
        {
           $_SESSION['mail'] = $mail;
           header('Location:principale.php')
        }
        else{
          header('Location:pagefirst.php');
        }
mysqli_close($link); // fermer la connexion
?>