  <?php
session_start();
$bdd = new PDO('mysql:host=127.0.0.1;dbname=glowfe', 'root', '');
if(isset($_SESSION['mail']) AND !empty($_SESSION['mail'])) {
   if(isset($_POST['envoi_message'])) {

       if(isset($_POST['destinataire'],$_POST['message']) AND !empty($_POST['destinataire']) AND !empty($_POST['message']) ) {
         $destinataire = htmlspecialchars($_POST['destinataire']);
         $message = htmlspecialchars($_POST['message']);
         $id_destinataire = $bdd->prepare('SELECT mail FROM user WHERE mail = ?');
         $id_destinataire->execute(array($destinataire));
         $dest_exist = $id_destinataire->rowCount();
         if($dest_exist == 1) {
            $id_destinataire = $id_destinataire->fetch();
            $id_destinataire = $id_destinataire['mail'];
            $ins = $bdd->prepare('INSERT INTO message (id_expediteur,id_destinataire,message) VALUES (?,?,?)');
            $ins->execute(array($_SESSION['mail'],$id_destinataire,$message));
            $error = "Votre message a bien été envoyé !";
         } else {
            $error = "Cet utilisateur n'existe pas...";
         }
      } else {
         $error = "Veuillez compléter tous les champs";
      }
   }
   $destinataires = $bdd->query('SELECT mail FROM user ORDER BY mail');
   if(isset($_GET['r']) AND !empty($_GET['r'])) {
      $r = htmlspecialchars($_GET['r']);
   }

   
   ?>
   <!DOCTYPE html>
   <html>
   <head>
      <title>Envoi de message</title>
      <meta charset="utf-8" />
   </head>
   <body>
      <form method="POST">
               <label>Destinataire:</label>

         <input type="text" name="destinataire" <?php if(isset($r)) { echo 'value="'.$r.'"'; } ?> />
         <br /><br />
         
        
         <br /><br />
         <textarea placeholder="Votre message" name="message"></textarea>
         <br /><br />
 
      


         <br /><br />
         <?php if(isset($error)) { echo '<span style="color:red">'.$error.'</span>'; } ?>
             <input type="submit" name="envoi_message" value="Envoyer" />  
      

      </form>
      <br />
      <a href="reception.php">Boîte de réception</a>
   </body>
   </html>
<?php
}
?>     