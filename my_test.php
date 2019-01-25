<?php
  require('recaptcha/autoload.php');
  if(isset($_POST['submitpost'])) {
    if(isset($_POST['g-recaptcha-response'])) {
      $recaptcha = new \ReCaptcha\ReCaptcha('6LdwLowUAAAAAG0kaUNDihtshNeBy35LD67xt-tV');
      $resp = $recaptcha->verify($_POST['g-recaptcha-response']);
      if ($resp->isSuccess()) {
          var_dump('Captcha Valide');
      } else {
          $errors = $resp->getErrorCodes();
          var_dump('Captcha Invalide');
          var_dump($errors);
      }
    } else {
      var_dump('Captcha non rempli');
    }
  }
?>
<html>
  <head>
    <title>reCAPTCHA demo: Simple page</title>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
    <form method="POST">
      <div class="g-recaptcha" data-sitekey="6LdwLowUAAAAAFkM-fIzzpREJMKIRXW43yzvL4XY"></div>
      <br/>
      <input type="submit" value="Valider" name="submitpost">
    </form>
  </body>
</html>
