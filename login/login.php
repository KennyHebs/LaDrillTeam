<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" media="screen" type="text/css">
    <title>Administration Portes Ouvertes</title>
</head>
<body>
    <header>
        <div id="logolycee">
            <img src="./ImageSite/LogoLycee.png" alt="Logo du lycée vieljeux">
        </div>
        <h1 class="textheader">Accès administrateur</h1>
        <h2 class="textheader">Identification</h2>
    </header>
    <div id="container">
        <form action="verification.php" method="POST" novalidate="novalidate">
            <h1>Connexion</h1>
            <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>
            <input type="submit" id="submit" value="Se connecter">
            <?php
            if (isset($_GET['erreur'])) {
                $err = $_GET['erreur'];
                if ($err == 1 || $err == 2) {
                    echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
            }
            ?>
        </form>
    </div>
</body>
