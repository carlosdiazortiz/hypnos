<?php
require 'admin-header.html';
require 'database_connection.php';
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion des établissements</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main class="branchofficesmanagement" id="dynamic-paragraph">
    <form class="addbranchoffice" action="addbranchoffice.php" method="post" >
        <fieldset>
            <legend>Créer un nouvel établissement</legend>
            <label for="name"></label>
            <input type="text" id="name" name="name" placeholder="Nom du nouvel établissement">
            <label for="city"></label>
            <input type="text" id="city" name="city" placeholder="Ville">
            <label for="address"></label>
            <input type="text" id="address" name="address" placeholder="Adresse">
            <label for="description"></label>
            <textarea rows="10" cols="40" id="description" name="description" placeholder="Description"></textarea>
            <button type="submit">Envoyer</button>
        </fieldset>
    </form>
</main>
<script src="script.js"></script>
</body>
</html>