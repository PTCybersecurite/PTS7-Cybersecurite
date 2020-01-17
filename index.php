<!DOCTYPE html>
<!-- Page introduction / Anecdotes -->

<html>
    <head>
        <meta charset="utf-8" />
        <!-- Implémentation de Bootstrap (1/2) -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

        <link rel="stylesheet" href="css/stylePT.css"/>
        <title>Accueil | e-Safety</title>

        <!-- Ajout d'un "favicon" -->
        <link rel = "icon" type = "image/x-icon" href ="favicon.ico"/>
        <!-- For apple devices -->
        <link rel = "apple-touch-icon" type = "image/x-icon" href ="favicon.ico"/>

        <script type="text/javascript" src"js/javascript.js"></script>
    </head>

<body>

	<!-- Barre de navigation en haut -->
		<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(45,101,129);">
		  
		  <a class="navbar-brand" href="#">
			<div id="logo_page">
			    <img src="images/Logo_wCM_blanc_allonge.png" width="350"  alt="logo">
            </div>
		  </a>
		 
		  <!-- Bouton affiché uniquement sur mobile pour dérouler -->
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		</nav>

	<hr>
	
	<section>
	<header>
		<h1> 
			<strong>Accueil</strong>
		</h1>
	</header>

		<div class="boite centree">
		  <img src="images/matrix.gif" alt="Card image cap" style="width:100%;height:100%;display:block;border-top-left-radius:3px;border-top-right-radius:3px;">
			<div class="sous-boite">
				<h5>Cours interactif</h5>
				<p>Développé par des étudiants de Centrale Marseille</p>
				<a href="cours/twine.php" id="start" class="btn btn-primary">Démarrer une partie</a>
			</div>
		</div>
	
	<!-- <h2>Sommaire des différents cours</h2>
		<ul>
			<li><a class="nav-link" href="cours/Mots_de_passe/Questions.php">Cours n°1 : Les mots de passe</a></li>
			<li><a class="nav-link" href="cours/Phishing/Introduction.php">Cours n°2 : Le phishing</a></li>
            <li><a class="nav-link" href="cours/Bonnes_Pratiques/Introduction.php">Cours n°3 : Les bonnes pratiques</a></li>
		</ul>	
		<br/> -->

		<h2>Objectifs pédagogiques</h2>
		<ol>
			<li>Les apprenants sont conscients des dangers du web.</li>
				<ol type="a">
					<li>Dangers actifs (ex: missclick…).</li>
					<li>Dangers passifs (ex: cookies…).</li>
				</ol>
			<br/>

			<li>Les apprenants sont capables de détecter différentes formes de phishing.</li>
				<ol type="a">
					<li>Détecter le phishing & réaction appropriée.</li>
					<li>Dans le cas où ils se font avoir, ils savent quels sont les pas à effectuer pour se sécuriser.</li>
				</ol>
			<br/>

			<li>Les apprenants sont conscients de l’existence de différents outils capables d’améliorer leur protection</li>
			<div class="exemple">(ex: VPN, gestionnaire de mots de passe, antivirus…)</div>
				<ol type="a">
					<li>Ils savent où les trouver.</li>
					<li>Ils connaissent et sont capables d’expliquer leur utilité.</li>
					<li>Ils savent s’en servir.</li>
				</ol>
			<br/>

			<li>Les apprenants ont une meilleure compréhension du fonctionnement de leur navigation sur le Web (adresse IP, cookies…)</li>
				<ol type="a">
					<li>Connaître l’empreinte laissée sur les sites.</li>
					<li>Proposer des solutions alternatives pour les outils les plus communs (Grant v. Google; drive, messagerie…).</li>
				</ol>
		</ol>
	</section>
	<footer>
	</footer>
	
	<!-- Implémentation de Bootstrap (2/2) -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
  	
</html>

