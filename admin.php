<?php
require 'database_connection.php';
if (isset($_POST['username']) && isset($_POST['password'])) {
    $stmt = $pdo->prepare('SELECT * FROM admin WHERE username = :name');
    $stmt->bindValue(':name', $_POST['username'], PDO::PARAM_STR);
    if ($stmt->execute()) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user === false) {
            echo "<script>alert('Nom d\'utilisateur ou mot-de-passe  invalides')</script>";
            echo "<script>window.location = 'admin-connect.php'</script>";
        } else {
            header('location: admin-account-add.php');
        }
    }
}


