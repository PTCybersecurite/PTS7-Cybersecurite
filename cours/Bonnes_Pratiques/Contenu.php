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
			<strong>Les mots de passe</strong>
		</h1>
	</header>
	<br/>
	<h2>Mot de passe compliqué et long</h2>
	<br/>

	<p>La première étape est la création d'un mot de passe, et pour que celui-ci soit efficace il faut qu'il suive plusieurs règles :</p>
	
	<ul>
		<li>Longueur du mot de passe : </li>
		
		<p>La longueur du mot de passe le rendra plus difficile à trouver. Par exemple limitons nous aux 26 caractères de l'alphabet : a,b,c,d,...,y,z. Sur un mot de passe de 5 caractères, il y a 26^5 possibilités pour celui-ci. Alors que sur un mot de passe de 10 caractères, il y aura 26^10 possibilités => on multiplie ainsi la difficulté de le trouver par 26^5.</p>
		
		<li>Complexité du mot de passe :</li>
		
		<p>Comme la longueur, la complexité du mot de passe est toute aussi importante pour le rendre efficace. Reprenons l'exemple précédent, si on se limite aux 26 caractères de l'alphabet, il n'existe que 26 possibilités par caractère du mot de passe. Et si l'on rajoute à cela les chiffres, les majuscules et les caractères spéciaux, on passe de 26 possibilités pour un caractère à plus de 90. Et ainsi pour un mot de passe à 5 caractères, il y aura 90^5 possibilités et pour un mot de passe à 10 caractères 90^10 possibilités.</p>
		<!-- pas avoir 10 fois le même caractère : aaaaaaaaaa + mettre des photos pour les exemples -->
	</ul>
	
	<p>Ainsi, la longueur et la complexité du mot de passe rendent celui-ci difficile à trouver de manière rapide. Cela permet donc de protéger ses données personnelles et permet d'éviter de nous exposer à plusieurs risques : blackmail, divulgation de fausses informations, ...
	</p>
	<br/>

	<h2>Avoir plusieurs mots de passe</h2>
	<br/>

	<p>Il est également très important de noter qu'il faut avoir plusieurs mots de passes différents pour votre banque, votre adresse mail personnelle, votre adresse mail professionnelle, votre compte Netflix, votre compte Youtube, etc.<br/></p>
	
	<p>Ainsi, si l'un de vos multiples comptes est piraté, on ne pourra pirater les autres car ceux-ci ont un mot de passe différent. Il faut savoir également que le hacking de compte s'effectue généralement sur des sites non sécurisés (pas de https mais juste http), ou sur des sites où les gens créent un compte juste parce qu'il est nécessaire d'en avoir un et dont ils n'ont besoin qu'une seule fois (boutique en ligne par exemple). Le problème est que si le mot de passe sur l'un de ces sites est le même que celui de votre banque, cela représente un grand danger pour vous.
	<!-- Exemple aussi des sites pour un endroit spécifique, genre club de voile, qui ne sera pas sécurisé -->
	</p>
	<br/>

	<h2>Méthode de création d'un mot de passe</h2>
	<br/>

	<p>Il est temps de vous apprendre à créer un mot de passe sécurisé, ne vous inquiétez c'est facile ! La première étape, c'est d'écrire une phrase plutôt longue, qui contient au moins une majuscule, une minuscule, un chiffre, et une ponctuation (et/ou un caractère spécial).<p>
	<div class="exemple">ex : "Le carré de l'hypoténuse est égal à la somme des carrés des 2 autres côtés."</div>
	<br/>

	<p>Ensuite, il existe trois méthodes possibles :
		<ul>
			<li>La méthode phonétique : on remplace les mots par les sons qui les composent</li>
			<div class="exemple">ex : "Je vais acheter 6 pommes de terre" "donne JvAHT6pDT"</div>
			<br/>

			<li>La méthode des premières lettres: on ne gardent que les premières lettres de chaque mot</li>
			<div class="exemple">ex : " Le carré de l'hypoténuse est égal à la somme des carrés des 2 autres côtés." donne "Lcdl'heéàlsdcd2ac."</div>
			<br/>

			<li>La méthode des mots principaux : on ne garde que les informations importante qui composent la phrase.</li>
			<div class="exemple">ex : "Je me suis mariée le 12 juin 1984." donne "J_M_Le12j84."</div>
			<br/>
		</ul>
	</p>
	<p>	
		Ces méthodes présentent l’avantage d’être facile à utiliser, et facile à retrouver. La même phrase peut aussi être déclinée de différentes manières pour être utilisée sur des sites différents.
		Enfin, il est facilement possible de consolider un mot de passe en remplaçant un des mots par un caractère spécial, comme #.
	</p>
	<br/>

	<h2>Gestionnaire de mots de passe</h2>
	<br/>

	<p>C'est bien beau de vous apprendre qu'il faut avoir plein de mots de passes longs, compliqués et en avoir pleins de différents mais il y a un gros problème : comment se souvenir de chacun de ses mots de passe ? On pourrait par exemple tous les écrire sur une feuille et la cacher quelque part dans notre appartement ou même développer un palais mental pour qu'il n'y ait aucun indice physique sur nos logins. On va cependant préférer quelque chose de plus sécurisé et plus simple à mettre en place (la réponse est dans le titre) : on va utiliser un gestionnaire de mots de passe.</p>

	<p>C'est le moyen actuel le plus répandu pour avoir des mots de passe qui respectent les règles énoncées précedemment et réussir à les mémoriser. Il en existe plusieurs, l'un des plus répandus étant Dashlane. <!-- en citer d'autres et inclure des images --> 
	Ceux-ci permettent de n'avoir qu'un seul mot de passe à retenir : celui pour accéder à notre gestionnaire.
	<!-- j'ai écris que ça pour le moment il faudrait plus développer --> 
	</p>
	<br/>
	</section>

<?php include('../../includes/footer.php')?>
