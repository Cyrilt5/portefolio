<?php 

// In case any of our lines are larger than 70 characters, we should use wordwrap()

$to = "cyril.tricart@gmail.com";
$subject = $_POST['objet'];
$message = $_POST['message'];
$headers = 'From: '. $_POST['mail'] . phpversion();

mail($to, $subject, $message, $headers);

/*$message = wordwrap($_POST['message'], 70, "\r\n");

// Send
mail('cyril.tricart@gmail.com', $_POST['objet'], $message);
//$nom=$_POST['nom']; 
$mail=$_POST['mail']; 
$objet=$_POST['objet']; 
$message=$_POST['message']; 

print_r($_POST);

/////voici la version Mine 
$headers = "MIME-Version: 1.0\r\n"; 

//////ici on détermine le mail en format text 
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n"; 

////ici on détermine l'expediteur et l'adresse de réponse 
$headers .= "From: $nom <$mail>\r\nReply-to : $nom <$mail>\nX-Mailer:PHP"; 

$subject="$objet"; 
$destinataire="cyril.tricart@gmail.com"; //remplacez "webmaster@votre-site.com" par votre adresse e-mail
$body="$message"; 
if (mail($destinataire,$subject,$body,$headers)) { 
echo "Votre mail a été envoyé<br>"; 
} else { 
echo "Une erreur s'est produite"; 
} 
?></p>
<p align="center">Vous allez bientot etre redirigé vers la page d'acceuil<br>
Si vous n'etes pas redirigé au bout de 5 secondes cliquez <a href="index.html">ici 
</a></p>*/