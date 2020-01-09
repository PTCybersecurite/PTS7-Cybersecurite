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
				<a class="nav-link" href="Evaluation.php">Page suivante</a>
			  </li>
			</ul>
		  </div>
		</nav>

		<hr>
		
	<section>
	<header>
		<h1> 
			<strong>Les bonnes pratiques pour naviguer sur le web</strong>
		</h1>
	</header>
	<br/>
	<h2>Le protocole HTTPS</h2>
	<br/>

	<p>Le protocole HTTP (Hypertext Transfer Protocol) est un protocole de communication développé pour le web qui permet d'établir une connexion entre un navigateur (Google Chrome, Firefox, Opera, Safari, ...) et un serveur hébergeant un site internet. Ce protocole est indispensable pour pouvoir recevoir ou envoyer des informations au serveur.
	Malheureusement, ce protocole n'est pas sécurisé, les données peuvent être interceptées telles quelles et sont lisibles aisément. Si vous voulez acheter le dernier album de Jul, et que vous rentrer vos coordonnées bancaires sur un site avec seulement un protocole HTTP, il y a de fortes chances que quelqu'un vous les vole.</p>
	<p>C'est pourquoi le protocole HTTPS (Hypertext Transfer Protocol Secure) a été créé. Ce protocole rajoute une couche de cryptage permettant de sécuriser les données en passant par un certificat SSL (Secure Socket Layer) ou TLS (Transport Layer Security). Ainsi, les données des utilisateurs sont protégées et confidentielles, car si elles sont interceptées, elles sont illisibles. Chaque utilisateur peut vérifier si un site possède le protocole HTTPS en regardant dans son navigateur : dans la barre d'adresse, on peut voir un cadenas si le site est sécurisé.</p>

	
	</section>

<?php include('../../includes/footer.php')?>
