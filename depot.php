<?php
session_start();
if (isset($_SESSION['login'])) {
?>
<html>
<head>
    <title>Administration</title>
</head>
<body>
<form method="Post" action="logout.php">
    <input type="submit"  id="logout" value="Déconnexion">
</form>
<form name="Inscription-form" method="POST" action="ajoutertransaction.php" >
                <label for="form_name">Identifiant du client </label>
                <input type="text" id="ref" name="ref"  placeholder="Entrer l'identifiant"  />
    <div>
        <label for="form_name">Type</label>
                <input type="text" class="form-control" placeholder="Depôt" disabled />
    </div>
            <div>
                <label for="montant">Montant</label>
                <input type="text" pattern="\d*" id="montant" name="montant" placeholder="Entrer le montant "/>
            </div>
    ?>