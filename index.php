<?php
session_start();
?>
<!DOCTYPE html>
<html>
<html lang="fr">
<head>
<title>Switech Digital Agency | Paris | Expert Digital</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Expert en création de sites web, applications mobiles, référencement SEO/SEA, et community management, nous proposons des solutions web sur-mesure."/>
</head>
<link rel="icon" href="img/ico.jpeg" type="image/jpeg" sizes="16x16">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/mesfonctions.js"></script>
	<script src="https://www.google.com/recaptcha/api.js"></script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("img/mac.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}


/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 25%;
  right: 2%;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 400px;
  padding: 10px;
  background: white;
}

/* Full-width input fields */
.form-container input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

.form-container input[type=sujet] {
	width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

.form-container input[type=text] {
	width: 100%;
  padding: 30px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}


/* When the inputs get focus, do something */
.form-container input[type=email]:focus, .form-container input[type=text]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">SWITECH</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">A PROPOS</a>
      <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
      <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>
      <a href="#pricing" class="w3-bar-item w3-button"><i class="fa fa-usd"></i>PRIX</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">A PROPOS</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
  <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRIX</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Nous donnons vie à vos projets
      <br>dans l'univers du digital</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Nous donnons vie à vos projets dans l'univers du digital</span><br>
      <span class="w3-large">Léguer vos projets à des professionnels.</span>
    <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Lancez-vous maintenant</a></p>
  </div>
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
		<right>
				<span class="fa-stack fa-lg">
				<a href="https://www.linkedin.com/company/switech-digital-agency-paris/" target="_blank" style="color: #ffff;">
				<i class="fa fa-circle-thin fa-stack-2x" style="color: #ffff;"></i>
				<i class="fa fa-linkedin fa-stack-1x" style="color: #ffff;"></i>
				</a>
		</right>
		&nbsp;
				<span class="fa-stack fa-lg">
				<a href="https://www.instagram.com/switechagency/" target="_blank" style="color: #ffff;">
				<i class="fa fa-circle-thin fa-stack-2x" style="color: #ffff;"></i>
				<i class="fa fa-instagram fa-stack-1x"></i>
				</a>
				</span>
  </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
	<meta name="title" content="A propos de notre société, tout ce que vous devez savoir sur notre manière de fonctionner">
  <h1 class="w3-center">À PROPOS DE NOTRE SOCIÉTÉ</h1>
  <p class="w3-center w3-large">Nos Mots d'ordres</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Sur Mesure</p>
      <p>Nous analysons votre demande, puis ensemble nous créons votre projet digital. Ensuite nous développons votre solution sur mesure. Exprimez vos envies, nous les réaliserons !</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-check-circle w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Qualité</p>
      <p>La qualité, est pour nous une obligation afin que votre activité professionnelle soit reconnue de tous ! Votre satisfaction est notre principal objectif et nous mettrons tous les moyens en oeuvre pour y parvenir. </p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-pencil w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Design</p>
      <p>Un design sur mesure qui vous correspond ! Ce projet est le vôtre, il vous ressemble ! Confiez nous votre charte graphique nous nous occupons de l'adapter sur votre future solution.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Support</p>
      <p>Notre support se tient à votre entière disposition, vous effectuez vos maintenances et répondre à vos questions. Nous sommes disponible directement par mail ou téléphone.</p>
    </div>
  </div>
</div>
	<center>
		<hr width="50%" color="grey">
	</center>
<!-- Promo Section - "We know design" -->
<div class="gtco-section" id="work">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Nos Réalisations</h2>
					<p>Voici un aperçu des travaux réalisés.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="img/Mika-folio.jpeg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="img/Mika-folio.jpeg" alt="Portfolio du sportif Mickael Gomes" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Portfolio</h2>
							<p>Portfolio du sportif Mickael Gomes, sportif semi-professionnel</p>
							<p><span class="btn btn-primary">Voir l'aperçu</span></p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="img/ormesson.jpeg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="img/ormesson.jpeg" alt="Conception du site web de la marque Ormesson" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Ormesson Paris</h2>
							<p>Conception du site web de la marque Ormesson</p>
							<p><span class="btn btn-primary">Voir l'aperçu</span></p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="img/reixtravel.jpeg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="img/reixtravel.jpeg" alt="Création du site web pour l'agence Reix Voyage" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Agence Reix Voyage</h2>
							<p>Conception du site web pour l'agence de voyage Reix Travel</p>
							<p><span class="btn btn-primary">Voir l'aperçu</span></p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="img/pourozoir.jpeg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="img/pourozoir.jpeg" alt="Conception du site web Pour Ozoir" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Association "Pour Ozoir"</h2>
							<p>Conception du site web de l'association "Pour Ozoir". Une association citoyenne.</p>
							<p><span class="btn btn-primary">voir l'aperçu</span></p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="img/vienneycorporation.jpeg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="img/vienneycorporation.jpeg" alt="Création du site web pour l'entreprise Vienney Corporation" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Entreprise Vienney Corporation</h2>
							<p>Conception du site web pour Vienney Corporation.</p>
							<p><span class="btn btn-primary">Voir l'aperçu</span></p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="img/travelreix.jpeg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="img/travelreix.jpeg" alt="Création du site web de l'agence Reix Travel" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Site de l'agence Reix Travel</h2>
							<p>Version finale du site web de l'agence de voyage "Reix Travel".</p>
							<p><span class="btn btn-primary">Voir l'aperçu</span></p>
						</div>
					</a>
				</div>

			</div>
		</div>
	</div>
	<center>
	<hr width="50%" color="grey">
	</center>
<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="team">
  <h1 class="w3-center">Notre équipe</h1>
  <p class="w3-center w3-large">Le coeur de notre société</p>
  <div class="w3-row-padding " style="margin-top:64px">
		<div class="w3-col l3 m6 w3-margin-bottom">
			<div class="w3-card">
				<img src="img/theo_rond.jpeg" alt="Theo" style="width:100%">
				<div class="w3-container">
					<h3>Théo De Nanassy</h3>
					<p class="w3-opacity">Développeur</p>
					<p>Théo De Nanassy, Ingénieur Expert Epitech 5éme année Switech</p>
					<center><p><button class="w3-button w3-light-grey w3-block" onclick="openForm()"><i class="fa fa-envelope"></i> Contact</button></p></center>
				</div>
			</div>
		</div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="img/Ilan_rond2.jpeg" alt="Ilan" style="width:100%">
        <div class="w3-container">
          <h3>Ilan BENAYOUN</h3>
          <p class="w3-opacity">CEO & Founder</p>
          <p>Ilan BENAYOUN, CEO et fondateur de l'agence digitale Switech</p>
					<center><p><button class="w3-button w3-light-grey w3-block" onclick="openForm()"><i class="fa fa-envelope"></i> Contact</button></p></center>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="img/jordan_rond2.jpeg" alt="Jordan" style="width:100%">
        <div class="w3-container">
          <h3>Jordan LAURENT</h3>
          <p class="w3-opacity">Co-Founder</p>
          <p>Jordan LAURENT, Co-Fondateur de l'agence digitale Switech.</p>
					<center><p><button class="w3-button w3-light-grey w3-block" onclick="openForm()"><i class="fa fa-envelope"></i> Contact</button></p></center>
					<div class="form-popup" id="myForm">
					  <form role="form" action="push.php" method="post" class="form-container">
					    <center><h1>Contactez-nous</h1></center>

					    <label for="email"><b>Votre email</b></label>
					    <input type="email" placeholder="Enter Email" name="email" required>

					    <!-- <label for="text"><b>Password</b></label>
					    <input type="text" placeholder="Enter Text" name="text" required> -->
							<label for="sujet"><b>Sujet</b></label>
							<input type="sujet" placeholder="Entrer votre sujet..." name="sujet" required>

							<label for="text"><b>Votre message</b></label>
							<input type="text" placeholder="Entrer votre texte..." name="text" required>
		          <div class="g-recaptcha"
		          data-sitekey="6LdwLowUAAAAAFkM-fIzzpREJMKIRXW43yzvL4XY">
		          </div>
							<?php
							  require('recaptcha/autoload.php');
							  if(isset($_POST['submit'])) {
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
							<button type="submit" class="btn" name="submit">Envoyer</button>
					    <button type="button" class="btn cancel" onclick="closeForm()">Fermer</button>
					  </form>
					</div>
        </div>
      </div>
    </div>
		<div class="w3-col l3 m6 w3-margin-bottom">
			<div class="w3-card">
				<img src="img/joa.jpeg" alt="Johanna" style="width:100%">
				<div class="w3-container">
					<h3>Johanna GUERY</h3>
					<p class="w3-opacity">Community Manager</p>
					<p>Johanna GUERY, Community Manager</br>Switech</p>
					<center><p><button class="w3-button w3-light-grey w3-block" onclick="openForm()"><i class="fa fa-envelope"></i> Contact</button></p></center>
				</div>
			</div>
		</div>
  </div>
</div>

<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
  <div class="w3-quarter">
    <span class="w3-xxlarge">14+</span>
    <br>Partenaires
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">15+</span>
    <br>Projets Finis
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">14+</span>
    <br>Clients Heureux
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">35+</span>
    <br>Rencontres
  </div>
</div>


<!-- Nos compétences -->
<div class="w3-container w3-light-grey w3-padding-64">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h2>Nos compétences</h2>
      <p>Voici la liste de nos compétences, et des missions que nous pouvons accomplir ensemble.</p>
			<br>
			<ul style="list-style-type:circle">
  			<li style="color: #3E96D6;">Création/Refonte de votre site web</li>
				<li style="color: #3E96D6;">Création d'applications mobiles</li>
				<li style="color: #3E96D6;">Gestion de projet numériques</li>
				<li style="color: #3E96D6;">Effectuer le référencement SEO/SEA de votre site web</li>
				<li style="color: #3E96D6;">Community Management avec vos réseaux sociaux associés</li>
  			<li style="color: #3E96D6;">Marketing D'influence avec notre réseau d'influenceurs</li>
  			<li style="color: #3E96D6;">Création graphique, rédaction de votre charte graphique</li>
			</ul>
    </div>
    <div class="w3-col m6">
      <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Création site web / Applications</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:100%">100%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-crop w3-margin-right"></i>Web Design</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:100%">100%</div>
      </div>
			<p class="w3-wide"><i class="fa fa-pencil w3-margin-right"></i>Réalisation Graphique</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-instagram w3-margin-right"></i>Community Management</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-google w3-margin-right"></i>Référencement SEO/SEA</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
      </div>
			<p class="w3-wide"><i class="fa fa-users w3-margin-right"></i>Marketing d'Influence</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:65%">65%</div>
    </div>
		<br>
  </div>
</div>

<!-- Pricing Section -->
<div class="w3-container w3-center w3-dark-grey" style="padding:128px 16px" id="pricing">
  <h2>Formules</h2>
  <p class="w3-large">Vous pouvez choisir une formule</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Standard</li>
        <li class="w3-padding-16"><b>Package Site Vitrine professionnel / Portfolio / Blog + Référencement + Formation Réseaux Sociaux</b></li>
        <li class="w3-padding-16"><b>10</b> Emails + Comptes Réseau Sociaux</li>
        <li class="w3-padding-16"><b>1</b>Nom de domaine </li>
        <li class="w3-padding-16"><b>24h/24</b> Support</li>
        <li class="w3-padding-16">
          <h3 class="w3-opacity">Nous contacter pour plus d'informations</h3>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-black w3-padding-large">Sélectionner</button>
        </li>
      </ul>
    </div>
    <div class="w3-third">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-red w3-xlarge w3-padding-48">Pro</li>
        <li class="w3-padding-16"><b>Site professionnel + Référencement + Animation des Réseaux Sociaux / Applications Mobiles</b></li>
        <li class="w3-padding-16"><b>100</b> Emails + Comptes Réseaux Sociaux</li>
        <li class="w3-padding-16"><b>1</b>Nom de domaine(plusieurs sous domaines possibles)</li>
        <li class="w3-padding-16"><b>24h/24</b> Support</li>
        <li class="w3-padding-16">
          <h3 class="w3-opacity">Nous contacter pour plus d'informations</h3>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-black w3-padding-large">Sélectionner</button>
        </li>
      </ul>
    </div>
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Expert</li>
        <li class="w3-padding-16"><b>Package Site professionnel + Référencement + Marketing / Applications Mobiles + Marketing</b></li>
        <li class="w3-padding-16"><b>100</b> Emails + Comptes Réseaux Sociaux</li>
        <li class="w3-padding-16"><b>1</b>Nom de domaine(plusieurs sous domaines possibles)</li>
        <li class="w3-padding-16"><b>24h/24</b> Support</li>
        <li class="w3-padding-16">
          <h3 class="w3-opacity">Nous contacter pour plus d'informations</h3>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-black w3-padding-large">Sélectionner</button>
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h2 class="w3-center">CONTACT</h2>
  <p class="w3-center w3-large">Racontez nous votre projet !</p>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i>Paris, France</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i>Téléphone : +33642465223</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: contact@switech.com</p>
    <br>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
      <p><button class="w3-button w3-black" type="submit"><i class="fa fa-paper-plane"></i> Envoyer Message</button></p>
    </form>
		<!-- Image of location/map -->
    <left>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10497.18741125175!2d2.69573574674044!3d48.87161728240737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e61b14fa1e3b81%3A0x40b82c3688c5720!2s77400+Lagny-sur-Marne!5e0!3m2!1sen!2sfr!4v1548179686125" width="500" height="725" frameborder="0" style="border:0" allowfullscreen></iframe>
		</left>

		<!-- InstaWidget -->
		<right>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="https://instawidget.net/v/user/switechagency" id="link-b5481776805282db148ad7209678d9fe2a8f9863a4d018033479af8adf2d0d70">@switechagency</a>
			<script src="https://instawidget.net/js/instawidget.js?u=b5481776805282db148ad7209678d9fe2a8f9863a4d018033479af8adf2d0d70&width=500px"></script>
		</right>
  </div>
</div>

<!-- Footer -->
<!-- Footer -->
<footer id="colophon" class="site-footer" role="contentinfo">
<div class="container">
    <div class="max"></div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                <div class="blc"> <h3 class="title" style="color: #ffff;"> <strong>L'agence</h3></strong>
                    <div class="entry-content" style="color: #DCCCD2;">
                        <p>Nous créons des sites internet en prenant en compte dès la conception les objectifs de visibilité sur Google. Nous assurons aussi le référencement de sites déjà en ligne.</p>
                    </div>
                </div>
            </div>
						<div class="col-12 col-sm-12 col-md-6 col-lg-3">
                <div class="blc"> <h3 class="title" style="color: #ffff;"><strong>Nos services</h3></strong>
                    <ul id="menu-nos-services" class="nav-col">
                        <li id="menu-item-620" class="menu-item menu-item-type-post_type menu-item-object-page current-page-ancestor menu-item-620"style="color: #3E96D6;"><a href="https://www.switech.fr/competences/"style="color: #3E96D6;">Création web</a></li>
                        <li id="menu-item-621" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-621"style="color: #3E96D6;"><a href="https://www.switech.fr/competences/"style="color: #3E96D6;">Référencement</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                <div class="blc"> <h3 class="title" style="color: #ffff;"><strong>Nous contacter</h3></strong>
                    <div class="entry-content" style="color: #DCCCD2;">
												<p>Switech Digital Agency</br> 9 rue Macheret </br>77400 Lagny Sur Marne</br>
                        <span style="color: #DCCCD2;">
                        <strong>06 42 46 52 23</strong>
                        </p>
                        <p>SAS au capital de 1000€</br> Siren: En cours d'immatriculation</p>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                <div class="blc">
                  	<div class="blc">  <h3 class="title" style="color: #ffff;"><strong>Ne manquez pas !</h3></strong>
                        <ul id="menu-footer-col-4" class="nav-col col_4">
                            <li id="menu-item-617" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-617"style="color: #3E96D6;"><a href=""style="color: #3E96D6;">Le référencement SEO.</a></li>
                            <li id="menu-item-618" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-618"style="color: #3E96D6;"><a href=""style="color: #3E96D6;">Etre visible sur google au lancement de son site web</a></li>
                            <li id="menu-item-13" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13"style="color: #3E96D6;"><a href=""style="color: #3E96D6;">Informations légales</a></li>
                            <li id="menu-item-12" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12"style="color: #3E96D6;"><a href="https://www.switech.fr/#contact"style="color: #3E96D6;">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
<div class="copyright">
    <div class="row justify-content-between">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col_logo order-last order-sm-last order-lg-first align-self-end">
<<<<<<< HEAD
                <a href="https://www.switech.fr" class="logo" title="Accueil Switech"> <img src="img/logoswitech.png" height="43" width="210" alt="switech.fr" class="disp_ib img-responsive" /> </a>
=======
                <a href="https://www.switech.fr" class="logo" title="Accueil Switech"> <img src="img/Logoswitech.png" height="43" width="210" alt="switech.fr" class="disp_ib img-responsive" /> </a>
>>>>>>> 0e865925389fa0e9843d3347170479baa6cf3515
                <span class="txt">© Switech Digital Agency. Tous droits réservés.</span>
            </div>
           <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col_nav align-self-end">
            <right>
                <span class="fa-stack fa-lg">
                <a href="https://www.linkedin.com/company/switech-digital-agency-paris/" target="_blank" style="color: #ffff;">
                <i class="fa fa-circle-thin fa-stack-2x" style="color: #ffff;"></i>
                <i class="fa fa-linkedin fa-stack-1x" style="color: #ffff;"></i>
                </a>
            </right>
            &nbsp;
                <span class="fa-stack fa-lg">
                <a href="https://www.instagram.com/switechagency/" target="_blank"style="color: #ffff;">
                <i class="fa fa-circle-thin fa-stack-2x" style="color: #ffff;"></i>
                <i class="fa fa-instagram fa-stack-1x"></i>
                </a>
                </span>
								<br>
								</br>
								<div class="LI-profile-badge"  data-version="v1" data-size="large" data-locale="fr_FR" data-type="horizontal" data-theme="dark" data-vanity="switech-digital-agency"><a class="LI-simple-link" href='https://fr.linkedin.com/in/switech-digital-agency-78a09617a?trk=profile-badge'>Switech Digital Agency</a></div>
								<script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
            </div>
        </div>
    </div>
</div>
</div>
</footer>

<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

$('a[href^="#"]').click(function(){
	var the_id = $(this).attr("href");
	if (the_id === '#') {
		return;
	}
	$('html, body').animate({
		scrollTop:$(the_id).offset().top
	}, 'slow');
	return false;
});
</script>

</body>
</html>
