<?php
require 'database_connection.php';
$stmt = $pdo->prepare('INSERT INTO branch_offices (name, city, address, description) 
                                        VALUES (:name, :city, :address, :description)');
$stmt->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
$stmt->bindValue(':city', $_POST['city'], PDO::PARAM_STR);
$stmt->bindValue(':address', $_POST['address'], PDO::PARAM_STR);
$stmt->bindValue(':description', $_POST['description'], PDO::PARAM_STR);
if ($stmt->execute()) {
    echo "<script>alert('Nouvel établissement ajouté')</script>";
    echo "<script>window.location = 'admin-account-add.php'</script>";
};


