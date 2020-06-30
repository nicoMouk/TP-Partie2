<!DOCTYPE html>
<html>
	<head>
		<title>Exercice PHP</title>
	</head>		
	<body>
		<?php
			//On vérifie que les variables existent et sont non-vides
			if(isset($_GET['repeter']) && !empty($_GET['repeter']) && isset($_GET['prenom']) && !empty($_GET['prenom']))
			{
				//on s'assure d'avoir un entier
				$_GET['repeter'] = (int) $_GET['repeter'];
				//on bani les grands nombres 
				if ($_GET['repeter'] >=1 and $_GET['repeter'] <= 100){
					$double = 2*$_GET['repeter'];
					echo 'Double de votre nombre : ' . $double . '<br>';
					for($i = 0; $i < $double; $i++)
					{
						echo '<p>Bonjour '. $_GET['prenom'] .' !</p>';
					}
				}
				
			}
		?>
		Pour revenir sur la page précédente, <a href="get_envoie.php">cliquez ici !</a>
	</body>
</html>