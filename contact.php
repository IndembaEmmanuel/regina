<?php

$msg_erreur = "Erreur. Les champs suivants doivent être obligatoirement remplis :<br/><br/>";
$message = $msg_erreur;
define('MAIL_DESTINATAIRE','baareth.appavou@gmail.com');
define('MAIL_SUJET','Email du site La Mode By Regina');

// vérification des champs//
if (empty($_POST['email'])) 
$message .= "Votre email<br/>";
if (empty($_POST['nom'])) 
$message .= "Votre nom<br/>";
if (empty($_POST['comments'])) 
$message .= "Votre message<br/>";


// si un champ est vide, on affiche le message d'erreur et on stoppe le script
if (strlen($message) > strlen($msg_erreur)) {
   echo $message; die();
}

// sinon c'est ok => on continue
foreach($_POST as $index => $valeur) {
  $$index = stripslashes(trim($valeur));
}


//Préparation de l'entête du mail:
$mail_entete  = "MIME-Version: 1.0\r\n";
$mail_entete .= "From: {$_POST['nom']} "
             ."<{$_POST['email']}>\r\n";
$mail_entete .= 'Reply-To: '.$_POST['email']."\r\n";
$mail_entete .= 'Content-Type: text/plain; charset="utf-8"';
$mail_entete .= "\r\nContent-Transfer-Encoding: 8bit\r\n";
$mail_entete .= 'X-Mailer:PHP/' . phpversion()."\r\n";

// préparation du corps du mail
$mail_corps  = "Message de : $nom\n";
$mail_corps .= "Email : $email\n";
$mail_corps .= "Message : $comments\n";



//$mail_corps .= "Objet du message : $objet\n";
//$mail_corps .= "Message : $comments\n";

// envoi du mail
if (mail(MAIL_DESTINATAIRE,MAIL_SUJET,$mail_corps,$mail_entete)) {
  //Le mail est bien expédié
    
} else {
  //Le mail n'a pas été expédié
  echo "Une erreur est survenue lors de l'envoi du formulaire par email";
}
echo "<script type=\"text/javascript\"> alert(\"Votre message a correctement été envoyé\"); </script>";
Header("Location: http://gbc-ci.com/site-regina3/home.php");

?>



