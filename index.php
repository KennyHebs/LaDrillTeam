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
        <h1 class="textheader">Création accès administrateur</h1>
    </header>
    <div id="container">
        <form action="register.php" method="POST" novalidate="novalidate">
            <h1>Enregistrement</h1>
            <label><b>Entrer votre nom</b></label>
            <input type="text" placeholder="Entrer votre nom" name="lastname" required>
            <label><b>Entrer votre prénom</b></label>
            <input type="text" placeholder="Entrer votre prénom" name="firstname" required>
            <label><b>Choisir un nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
            <label><b>Choisir un mot de passe</b></label>
            <input type="password" placeholder="Entrer un mot de passe" name="password" required>
            <label><b>Confirmer le mot de passe</b></label>
            <input type="passwordverif" placeholder="Confirmer le mot de passe" name="passwordverif" required>
            <input type="submit" id="submit" value="S'enregistrer">
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
