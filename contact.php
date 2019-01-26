<?php
session_start();

require('recaptcha/autoload.php');
$_SESSION['ret_con'] = 0;

if(isset($_POST['submit_contact'])) {
	if(isset($_POST['g-recaptcha-response'])) {
		$recaptcha = new \ReCaptcha\ReCaptcha('6LdwLowUAAAAAG0kaUNDihtshNeBy35LD67xt-tV');
		$resp = $recaptcha->verify($_POST['g-recaptcha-response']);
		if ($resp->isSuccess()) {
      if (isset($_POST['name_contact']) && isset($_POST['email_contact']) && isset($_POST['subject_contact']) && isset($_POST['message_contact']))
      {
        $contact_name = $_POST['name_contact'];
        $contact_email = $_POST['email_contact'];
        $contact_subject = $_POST['subject_contact'];
        $contact_message = $_POST['message_contact'];

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
        $message_txt = "Switech.fr, Je m'appelle " . $contact_name . "et je vous contact personnellement.";
        $message_html = "<html><head></head><body><b>" . $contact_name . "</br>" . $contact_message . "</body></html>";
        //==========

        //=====Création de la boundary
        $boundary = "-----=".md5(rand());
        //==========

        //=====Définition du sujet.
        $sujet = $contact_subject;
        //=========

        //=====Création du header de l'e-mail.
        $header = "From: \"".$contact_email . "".$passage_ligne;
        $header.= "Reply-to: \"".$contact_email . "".$passage_ligne;
        $header.= "MIME-Version: 1.0".$passage_ligne;
        $header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
        //==========

        //=====Création du message.
        $message = $message_txt . $message_html . $passage_ligne."--".$boundary.$passage_ligne;
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
				$_SESSION['ret_con'] = 1;
        header('Location: index.php#contact');
        exit;
      }
      else {
				$_SESSION['ret_con'] = 2;
				header('Location: index.php#team');
				exit;
			}
    }
    else {
			$_SESSION['ret_con'] = 2;
			header('Location: index.php#team');
			exit;
		}
  }
}

?>
