<?php
try {
    $pdo = new PDO('postgresql://db:AVNS_uOuk3Fz2sFf00J_@app-378459c1-480f-4286-b61f-dcf36c55500d-do-user-11421380-0.b.db.ondigitalocean.com:25060/db?sslmode=require',
        'db',
        'AVNS_uOuk3Fz2sFf00J_');
} catch (PDOException $e) {
    echo 'La connexion à la base de données a échoué';
    $e->getMessage();
}