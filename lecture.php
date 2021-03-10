	<?php
session_start();
$bdd = new PDO('mysql:host=127.0.0.1;dbname=glowfe', 'root', '');
if(isset($_SESSION['mail']) AND !empty($_SESSION['mail'])) {
   if(isset($_GET['id']) AND !empty($_GET['id'])) {
      $id_message = intval($_GET['id']);
      $msg = $bdd->prepare('SELECT * FROM message WHERE id = ? AND id_destinataire = ?');
      $msg->execute(array($_GET['id'],$_SESSION['mail']));
      $msg_nbr = $msg->rowCount();
      $m = $msg->fetch();
      $p_exp = $bdd->prepare('SELECT mail FROM user WHERE mail = ?');
      $p_exp->execute(array($m['id_expediteur']));
      $p_exp = $p_exp->fetch();
      $p_exp = $p_exp['mail'];
   }
?>
<!DOCTYPE html>
<html>
<head>
   <title>Lecture du message </title>
   <meta charset="utf-8" />
</head>
<body>
   <a href="reception.php">Boîte de réception</a>    <a href="r.php?r=<?= $p_exp ?>">Répondre</a>    <br /><br /><br />
   <h3 align="center">Lecture du message </h3>
   <div align="center">
      <?php if($msg_nbr == 0) { echo "Erreur"; } 
      else
       { ?>
      <b><?= $p_exp ?></b> vous a envoyé: <br /><br />
      
      <?= nl2br($m['message']) ?><br />
      <?php } ?>
   </div>
</body>
</html>
<?php } ?>