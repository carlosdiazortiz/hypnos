<?php
require 'database_connection.php';
require 'User.php';
if (isset($_POST['username']) && isset($_POST['password'])) {
    $stmt = $pdo->prepare('SELECT * FROM admin WHERE username = :name AND password = :password');
    $stmt->bindValue(':name', $_POST['username'], PDO::PARAM_STR);
    $stmt->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
    if ($stmt->execute()) {
        $user = $stmt->fetchObject('User');
        if ($user === false)  {
            echo "<script>alert('Nom d\'utilisateur ou mot-de-passe  invalides')</script>";
            echo "<script>window.location = 'admin-connect.php'</script>";
        } else {
            header('location: admin-account-add.php');
        }
    }
}


