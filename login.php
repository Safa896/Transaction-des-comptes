<html>
<head>
	<title>login</title>
	<style>
        body{
            background-color:powderblue;

        }
        form {
            color: #AFB3B2;
        }
        option{
            background-color: #800000;
            width:64%;
            margin-top: 35px;
            height:10%;
            border-radius: :3px;
        }

        input{
            text-shadow: white;
            border-radius: 10px;
        }
        input:hover{
            color: #24292F;
            background-color: #FF00FF;

        }
	</style>
</head>
<body>
	<fieldset>
			<legend>login :</legend>
			<form method="POST" action="verif.php" >
				<label for="nom" >Donner Votre Nom :</label>
				<input type="text" name="login" placeholder="inserer votre nom" required id="nom">
				<br>
				<label for="mdp" >Donner le mot de passe :</label>
				<input type="password" name="pass" placeholder="inserer votre mot de passe " required id="mdp">
				<br>
				<input type="submit" name="submit" value="submit">
			</form>
	</fieldset>
				
</body>
</html>