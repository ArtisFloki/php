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
