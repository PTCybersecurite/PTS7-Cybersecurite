<!DOCTYPE html>
<!-- Page introduction / Anecdotes -->

<html>
    <head>
        <meta charset="utf-8" />
        <!-- Implémentation de Bootstrap (1/2) -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

        <link rel="stylesheet" href="css/stylePT.css"/>
        <title>Cours Cyber-Sécurité</title>

        <!-- Ajout d'un "favicon" -->
        <link rel = "icon" type = "image/png" href ="images/Logo_bleu.png>"/>
        <!-- For apple devices -->
        <link rel = "apple-touch-icon" type = "image/png" href ="images/Logo.png"/>

        <script type="text/javascript" src"js/javascript.js"></script>
    </head>

<body>

	<!-- Barre de navigation en haut -->
		<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #478AAB;">
		  
		  <a class="navbar-brand" href="#">
			<img src="images/Logo.png" width="60" height="60" alt="logo"> 	
		  </a>
		 
		  <!-- Bouton affiché uniquement sur mobile pour dérouler -->
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		 
		  <!-- Les éléments de la navbar -->
		  <div class="collapse navbar-collapse" id="navbarNav">
		  
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="#">Menu Principal <span class="sr-only">(current)</span></a>
			  <li class="nav-item">
				<a class="nav-link" href="cours/Mots_de_passe/Questions.php">Cours n°1</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="cours/Phishing/Introduction.php">Cours n°2</a>
			  </li>
			</ul>
		  </div>
		</nav>

	<hr>
	
	<section>
	<header>
		<h1> 
			<strong>Menu Principal</strong>
		</h1>
	</header>

	<h2>Sommaire des différents cours</h2>
		<ul>
			<li><a class="nav-link" href="cours/Mots_de_passe/Questions.php">Cours n°1 : Les mots de passe</a></li>
			<li><a class="nav-link" href="cours/Phishing/Introduction.php">Cours n°2 : Le Phishing</a></li>
		</ul>	
		<br/>

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

