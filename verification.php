<?php
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Connexion à la base de données
    $db_username = 'admin';
    $db_password = 'alpaga17';
    $db_name = 'test';
    $db_host = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die('Impossible de se connecter à la base de données');

    // Échapper les entrées pour éviter les attaques SQL et XSS
    $username = mysqli_real_escape_string($db, htmlspecialchars($_POST['username']));
    // ...
    // Vérification des informations d'identification et redirection vers la page principale
    // ...
}
?>
