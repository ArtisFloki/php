<?php
$to      = 'contact@yourmailadress.com';
$subject = $_POST["object"];
$message = $_POST["message"];
$headers = 'From: ' . $_POST["name"] . "<" . $_POST["mailadress"] . ">\r\n" .
    'Reply-To: ' . $_POST["mailadress"] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>

<!DOCTYPE html>
<html>
  <head>
    <html lang="fr">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <title></title>
  </head>
  <body>
    <h1>Message de <?=$_POST["name"]?></h1>
    <div>adresse: <?php echo $_POST["mailadress"]; ?></div>
    <div>objet: <?=$_POST["object"]?></div>
    <div><?=$_POST["message"]?></div>

  </body>
</html>


<!-- HTML -->
<form class="formulaire" action="mail.php" method="post">
  <h3>Formulaire de contact</h3>
  <input type="email" name="mailadress" placeholder="Votre adresse mail *" required/>
  <input type="text" name="name" placeholder="Votre nom *" required/>
  <input type="text" name="object" placeholder="Objet *" required/>
  <textarea id="message" placeholder="Votre message *" type="text" name="message" required></textarea>
  <button name="button" type="submit">Envoyer</button>
  <p>Les champs suivis d'un * sont obligatoires</p>
</form>
