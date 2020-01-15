<!DOCTYPE html>

<?php require('../../includes/header.php')?>

<body>

        <?php include('../../includes/Bootstrap_navbar.php')?>

			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="../../index.php">Menu Principal <span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="Introduction.php">Page précédente</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="Retour.php">Page suivante</a>
			  </li>
			</ul>
		  </div>
		</nav>

		<hr>
		
	<section>
	<header>
		<h1> 
			<strong>Ce qu'il faut savoir pour naviguer sur le web</strong>
		</h1>
	</header>
	<br/>
	<h2>Le protocole HTTPS</h2>
	<br/>

	<p>Le protocole HTTP (Hypertext Transfer Protocol) est un protocole de communication développé pour le web qui permet d'établir une connexion entre un navigateur (Google Chrome, Firefox, Opera, Safari, ...) et un serveur hébergeant un site internet. Ce protocole est indispensable pour pouvoir recevoir ou envoyer des informations au serveur.
	Malheureusement, ce protocole n'est pas sécurisé, les données peuvent être interceptées telles quelles et sont lisibles aisément. Si vous voulez acheter le dernier album de Jul, et que vous rentrer vos coordonnées bancaires sur un site avec seulement un protocole HTTP, il y a de fortes chances que quelqu'un vous les vole.</p>
	<p>C'est pourquoi le protocole HTTPS (Hypertext Transfer Protocol Secure) a été créé. Ce protocole rajoute une couche de cryptage permettant de sécuriser les données en passant par un certificat SSL (Secure Socket Layer) ou TLS (Transport Layer Security). Ainsi, les données des utilisateurs sont protégées et confidentielles, car si elles sont interceptées, elles sont illisibles. Chaque utilisateur peut vérifier si un site possède le protocole HTTPS en regardant dans son navigateur : dans la barre d'adresse, on peut voir un cadenas si le site est sécurisé.</p>
	<br/>

	<h2>PC publics et connexions publiques</h2>
	<br/>

	<p>Il faut faire attention à l'utilisation des pc publics ou des connexions publiques. Les pc publics peuvent avoir une grande utilité, notamment si on veut chercher des choses sur le web (articles de journaux, images, musiques, aller sur wikipédia, ...). Le seul problème est que ce pc ne vous appartient pas, vous ne pouvez pas savoir ce qui s'est passé dessus. Il peut y avoir des virus, suite à la mauvaise utilisation d'une des personnes, ou implentés par des personnes mal-intentionnées. Il est fortement recommandé de faire très attention si vous vous connectez à un site important (comme votre boite mail). Vos coordonnées pourraient être enregistrées par un logiciel tournant en fond. Et surtout, n'enregistrez pas vos mots de passe sur les sites, la personne d'après y aura accès.</p>
	<p>Il en va de même pour les connexions publiques, il faut être certain de qui vous fournit votre accès internet et ce pour les mêmes raisons qui sont citées partout dans le cours.</p>
	<br/>

	<h2>Les cookies</h2>
	<p>En plus d'être de délicieux gâteaux, les cookies sont aussi des petits fichiers texte automatiquement enregistrés sur votre ordinateur quand vous parcourez un site web. Ils permettent aux sites de vous reconnaître et de conserver certaines informations à votre sujet, comme votre authentification, vos préférences linguistiques, vos sujets préférés, etc. Cela vous permet de ne pas vous rentrer vos identifiants à chaque fois que vous allez sur un site (Youtube, Facebook, Netflix, ...). Ils servent aussi à faire de la publicité ciblée. Le cookie est simplement un fichier texte, mais il peut contenir tout ce qu'on veut y mettre.</p>
	<p>Il faut savoir que chaque cookie possède une date d'expiration. En effet, la loi exige que les cookies soient supprimés dans les 13 mois au maximum. Donc pendant 13 mois maximum, vous possédez sur votre ordinateur des fichiers textes contenant vos identifiants en clair. Si quelqu'un à accès physiquement à votre machine, il peut récupérer ces données. Les cookies passent par les requêtes HTTP, si quelqu'un arrive à intercepter cette requête, il peut récupérer vos données (C'est aussi pourquoi il faut vérifier que vous êtes sur un site ayant le protocole HTTPS).</p>
	<p>Il y a plusieurs solutions à cela. Tout d'abord, l'utilisateur pourrait désactiver les cookies mais beaucoup de sites web en ont besoin pour bien fonctionner, ce qui le pénaliserait. Il pourrait également vider régulièrement ces cookies. Si vous ne voulez pas tous supprimer, il existe des utilitaires tels Ad-aware ou Spybot S&D qui savent traquer et reconnaître les cookies malveillants.</p>
	<p>Dans un deuxième temps, la sécurité d'un site est à la charge de ceux qui l'ont conçu. Il faut que le site respècte plusieurs règles au niveau des cookies (chiffre les cookies, utiliser des protocoles HTTPS, utiliser un ID de session aléatoire, ...).</p>
	<br/>

	<h2>Les bloqueurs de publicités</h2>
	<p>Adblock et companie ne servent pas simplement à visualiser des vidéos Youtube en paix, ils vous protègent de plusieurs menaces. En effet, ces bloqueurs de publicités empêchent les publicités d'apparaître sur votre écran (on ne l'aurait jamais deviné), et surtout ils bloquent des publicités malveillantes. Quand on clique sur celles-ci, on est envoyé sur un site qui fait qu'un malware s'infiltre dans votre système. Si cela arrive et que vous n'avez pas un bon anti-virus, cela peut bousiller votre machine.</p>
	<p>Il y a aussi un autre avantage pratique quand on utilise des bloqueurs de publicités, c'est que notre navigation est plus fluide et plus rapide. Les publicités demandent beaucoup de données pour s'afficher, il est donc plus rapide de ne pas les afficher du tout.</p>
	<br/>

	
	</section>

<?php include('../../includes/footer.php')?>
