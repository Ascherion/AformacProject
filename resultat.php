<!DOCTYPE html>
<html>
<head>
	<title>Resultats</title>
	<meta charset="utf-8" />
		<title>Hey!!!</title>
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
			echo "Vous etes bien sur la page des resultats... Et... C'est a peu près tout!";
		}
		?>
		</script>
	</body>
</html>