<html>
	<head>
		<meta charset="utf-8" />
		<title>Hey!!!</title>
	</head>
	<body>
        <?php
            if(isset($_GET['wololo']))
            {
        ?>
                <p class="erreur">
                    <?php echo $_GET['wololo'];?>
                </p>
        <?php
            }
        ?>

		<form class="" action="verification.php" method="post">
    		<p>Renseignez votre email</p>
    		<input type="email" name="email" value="" method="post" /></br>
    		
    		<p>Renseignez votre prénom</p>
    		<input type="text" name="prenom" value="" method="post" />
    		</br>

    		<p>Renseignez votre nom</p>
    		<input type="text" name="nom" value="" method="post" />
    		</br>

    		<p>Renseignez votre adresse</p>
    		<input type="text" name="adresse" value="" method="post" />
    		</br>

    		<p>Renseignez votre age</p>
    		<input type="text" name="age" value="" method="post" />
    		</br>

    		<p>Renseignez votre téléphone</p>
    		<input type="text" name="telephone" value="" method="post" />
    		</br>

    		<input type="submit" value="Valider" />
  		</form>
	</body>
</html>