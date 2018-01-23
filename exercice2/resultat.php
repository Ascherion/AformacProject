<!DOCTYPE html>
<html>
<head>
	<title>Resultats</title>
	<meta charset="utf-8" />
	<title>Hey!!!</title>
</head>
	<body>
		<?php
			$formulaire = array 
			("nom" => $_POST['nom'], 
			"prenom" => $_POST['prenom'], 
			"adresse" => $_POST['adresse'], 
			"email" => $_POST['email'], 
			"telephone" => $_POST['telephone'], 
			"age" => $_POST['age']);

			foreach ($formulaire as $key => $value)
			{
  				if($value == "")
  				{
    				echo $key ." ". "erreur<br>";
				}
				else
  				{
    				echo $key ." ". "ok<br>";
  				}
			}
		?>
	</body>
</html>