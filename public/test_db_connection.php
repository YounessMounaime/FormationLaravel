<?php
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=laravel', 'root', '');
    echo "Connexion réussie à la base de données!";
} catch (PDOException $e) {
    echo "Erreur de connexion: " . $e->getMessage();
}
?>
