<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=hypnos;charset=utf8mb4;port=3306', 'admin', 'hippocampe');
} catch (PDOException $e) {
    echo 'La connexion à la base de données a échoué';
    $e->getMessage();
}