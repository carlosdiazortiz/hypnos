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
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main class="branchofficesmanagement" id="dynamic-paragraph">
    <form class="modifybranchoffice" action="modifybranchoffice.php" method="post">
        <fieldset class="modifybranchoffice-fieldset">
            <legend>Modifier un établissement</legend>
            <label for="branchofficelist"></label>
            <select name="name" id="branchofficelist">
                <option value="" selected disabled>Choisissez un établissement</option>
                <?php foreach($pdo->query('SELECT name FROM branch_offices', PDO::FETCH_ASSOC) as $names): ?>
                    <option value="<?= $names['name']; ?>"><?= $names['name']; ?></option>
                <?php endforeach ?>;
            </select>
            <button class="select" type="submit">Afficher</button>
            <?php
            if (isset($_POST['name'])) {
                echo $contents;
            }
            ?>
        </fieldset>
    </form>
</main>
<script src="script.js"></script>
</body>
</html>