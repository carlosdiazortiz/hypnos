<?php
try {
    $pdo = new PDO('mysql:host=my-app-wj9fc.ondigitalocean.app;dbname=hypnos;charset=utf8mb4;port=3306', 'carlos', 'palante');
} catch (PDOException $e) {
    echo 'La connexion à la base de données a échoué';
    $e->getMessage();
}