<!DOCTYPE html>
<html>
<head>
	<title>Resultats</title>
	<meta charset="utf-8" />
	<title>Hey!!!</title>
</head>
	<body>
		<?php
			$error = "Remplis ca bande de moule!!! <br>";

			$formulaire = array 
			("ton nom" => $_POST['nom'], 
			"ton prenom" => $_POST['prenom'], 
			"ton adresse" => $_POST['adresse'], 
			"ton email" => $_POST['email'], 
			"ton telephone" => $_POST['telephone'], 
			"ton age" => $_POST['age']);

			foreach ($formulaire as $key => $value)
			{
  				if($value == "")
  				{
    				//echo $key ." ". "erreur<br>";
    				$error = $error." ".$key."<br>";
    				header("location:index.php?wololo=".$error);
				}
			}
		?>

		<h2>TADAAAAM! LvL Up! Tu passes de "Bande de moule" à "Vieille huitre"!</h2>
	</body>
</html>