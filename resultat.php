<!DOCTYPE html>
<html>
<head>
	<title>Resultats</title>
	<meta charset="utf-8" />
		<title>Hey!!!</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
</head>
	<body>
		<?php

		if (empty($_POST["mail"]))
		{
			echo "E-mail invalide";
		}

		else if (empty($_POST["checkbox"]))
		{
			echo "Checkbox invalide";
		}

		else
		{
			echo "Vous etes bien sur la page des resultats... Et... C'est a peu près tout.";
		}
		?>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
		</script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js">
		</script>
	</body>
</html>