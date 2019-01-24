<?php
session_start();

if (isset($_POST['email']) && isset($_POST['sujet']) && isset($_POST['text'])) {
	$email_client = $_POST['email'];
	$sujet_client = $_POST['sujet'];
	$text_client = $_POST['text'];

	$mail = 'contact@switech.fr'; // Déclaration de l'adresse de destination.
	if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|gmail|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
	{
		$passage_ligne = "\r\n";
	}
	else
	{
		$passage_ligne = "\n";
	}
	//=====Déclaration des messages au format texte et au format HTML.
	$message_txt = "Switech.fr, un nouvel utilisateur vous contact personnellement.";
	$message_html = "<html><head></head><body><b>" . $text_client . "</body></html>";
	//==========

	//=====Création de la boundary
	$boundary = "-----=".md5(rand());
	//==========

	//=====Définition du sujet.
	$sujet = $sujet_client;
	//=========

	//=====Création du header de l'e-mail.
	$header = "From: \"".$email_client . "".$passage_ligne;
	$header.= "Reply-to: \"".$email_client . "".$passage_ligne;
	$header.= "MIME-Version: 1.0".$passage_ligne;
	$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
	//==========

	//=====Création du message.
	$message = $message_txt.$message_html.$passage_ligne."--".$boundary.$passage_ligne;
	//=====Ajout du message au format texte.
	$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
	$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
	$message.= $passage_ligne.$message_txt.$passage_ligne;
	//==========
	$message.= $passage_ligne."--".$boundary.$passage_ligne;
	//=====Ajout du message au format HTML
	$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
	$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
	$message.= $passage_ligne.$message_html.$passage_ligne;
	//==========
	$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
	$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
	//==========
	//=====Envoi de l'e-mail.
	mail($mail,$sujet,$message,$header);
	header('Location: index.php#team');
	exit;
}
else {
	header('Location: index.php#team');
	exit;
}
?>
