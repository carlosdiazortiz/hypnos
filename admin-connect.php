<?php
require 'header.html';
require 'footer.html';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style src=""></style>
</head>
<body>
<div class="bg-modal">
        <form class="admin-form"  action="admin.php" method="post">
            <fieldset>
                <div class="close-admin-form">+</div>
                <legend>Connexion à votre space administrateur Hypnos</legend>
                <label for="username"></label>
                <input type="text" id="username" name="username" placeholder="Nom d'utilisateur">

                <label for="password"></label>
                <input type="password" id="password" name="password" required placeholder="Mot de passe">

                <button class="admin-button" type="submit">Se connecter</button>
            </fieldset>
        </form>
</div>
<script src="script.js"></script>
</body>
</html>
