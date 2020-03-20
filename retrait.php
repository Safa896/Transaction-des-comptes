<?php
session_start();
if (isset($_SESSION['login'])) {
?>
<html>
<head>
    <title>Administration</title>
</head>
<div class="form-group">
    <label for="form_name">Type</label>
    <input type="text" class="form-control" placeholder="Retrait" disabled />
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="form_name">Montant </label>
            <input type="Number" id="nom" name="nom" class="form-control" placeholder="Entrer le montant" required minlength="2" />
        </div>
    </div>
</div>

    <input type="submit" class="btn btn-success btn-lg" name="mySubmit" value="Sauvegarder">
?>