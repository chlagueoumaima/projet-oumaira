  <?php
session_start();
$bdd = new PDO('mysql:host=127.0.0.1;dbname=glowfe', 'root', '');
if(isset($_SESSION['mail']) AND !empty($_SESSION['mail'])) {
$msg = $bdd->prepare('SELECT * FROM message WHERE id_destinataire = ? ORDER BY id DESC');
$msg->execute(array($_SESSION['mail']));
$msg_nbr = $msg->rowCount();
?>
<!DOCTYPE html>
<html>
<head>
   <title>Boîte de réception</title>
   <meta charset="utf-8" />
</head>
<body>

   <a href="messagerie.php?id=<?= $_SESSION['mail'] ?>">Nouveau message</a><br /><br /><br />
   <h3>Votre boîte de réception:</h3>
   <?php
   if($msg_nbr == 0) { echo "Vous n'avez aucun message..."; }
   while($m = $msg->fetch()) {
      $p_exp = $bdd->prepare('SELECT mail FROM user WHERE mail = ? ');
      $p_exp->execute(array($m['id_expediteur']));
      $p_exp = $p_exp->fetch();
      $p_exp = $p_exp['mail'];
   ?>

   <b><?php echo $p_exp ?></b> vous a envoyé 
      <a href="lecture.php?id=<?= $m['id'] ?>"<?php if($m['lu'] == 1) { ?><span style="color:grey"><?php } ?><b>un message</b> <br />
      <?php if($m['lu'] == 1) { ?></span><?php } ?></a><br />
   -------------------------------------<br/>
   <?php } ?>
                        <a href="principale.php">profil</a> <br>

</body>
</html>
<?php } ?>