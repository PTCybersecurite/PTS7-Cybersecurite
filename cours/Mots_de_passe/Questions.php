<!DOCTYPE html>

<?php require('../../includes/header.php')?>

<body>
    <header>

        <?php include('../../includes/Bootstrap_navbar.php')?>
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="../../index.php">Menu Principal <span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link disabled" href="#" aria-disabled="true">Page précédente</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="Introduction.php">Page suivante</a>
			  </li>
			</ul>
		  </div>
		</nav>
		
    </header>
	
	<hr>
	
	<section>
		<h1> 
            <strong>Questions d’introduction</strong>
        </h1>
    <div class="questionnaire">
		<form method="post" action="Questions_traitement.php">
			<p>
			<label for="question1">Combien de mots de passe différents avez-vous ?</label> :
			<br/>
			
			<select name="nombre" id="nombre">
				<option value= "option1_q1">1 seul</option>
				<option value= "option2_q1">2 ou 3</option>
				<option value= "option3_q1">4 ou 5</option>
				<option value= "option4_q1">+ de 5</option>
			</select>
			<br/>

			<label for="question2">Est-ce que vous en avez un différent pour banque, mail perso, mail pro, … ?</label> :
			<br/>
			
			<select name="different" id="different">
				<option value= "option1_q2">J'utilise partout le même mot de passe</option>
				<option value= "option2_q2">J'ai un mot de passe différent juste pour ma banque</option>
				<option value= "option3_q2">J'ai quelques mot de passe différents pour mes comptes</option>
				<option value= "option4_q2">J'ai un mot de passe différent pour quasiment tous mes comptes</option>
			</select>
			<br/>

			<label for="question3">Quelle est la complexité de vos mots de passe en général ?</label> :
			<br/>
			
			<select name="simplicite" id="simplicite">
				<option value= "option1_q3">J'utilise mon prénom et/ou ma date de naissance</option>
				<option value= "option2_q3">J'utilise seulement un type de caractère (que des lettres, que des chiffres)</option>
				<option value= "option3_q3">J'utilise généralement des majuscules et des chiffres</option>
				<option value= "option4_q3">J'utilise souvent des majuscules, des chiffres et des caractères spéciaux</option>
			</select>
			<br/>

			<label for="question4">Quelle est la longueur de vos mots de passe en général ?</label> :
			<br/>
			
			<select name="longueur" id="longueur">
				<option value= "option1_q4">Entre 1 et 3 caractères</option>
				<option value= "option2_q4">Entre 3 et 5 caractères</option>
				<option value= "option3_q4">Entre 5 et 10 caractères</option>
				<option value= "option4_q4">+ de 10 caractères</option>
			</select>
			<br/>
			
			<label for="question5">Avez-vous un gestionnaire de mots de passe ?</label> :
			<br/>
			
			<select name="gestionnaire" id="gestionnaire">
				<option value= "option1_q5">Oui</option>
				<option value= "option2_q5" selected>Non</option>
			</select>
			</p>
			
			<input type="submit" value="Envoyer" />
		</form>
	</div>
	</section>

<?php include('../../includes/footer.php')?>