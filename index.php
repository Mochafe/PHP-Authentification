<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <title>Accueil</title>
</head>
<body>
    <?php if(!isset($_SESSION["auth"])): ?>
        <nav class="navbar bg-light">
        <form class="container-fluid justify-content-end">
            <a class="btn btn-outline-success me-2" href="login.php">Connexion</a>
            <a class="btn btn-primary" href="register.php">S'inscrire</a>
        </form>
        </nav>
    <?php else: ?>
        <nav class="navbar bg-light">
        <form class="container-fluid justify-content-end">
            <div class="dropdown me-5">
                <a href="#" class="btn btn-outline-success dropdown-toggle" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Utilisateur</a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="user_detail.php">Profil</a></li>
                    <li><a class="dropdown-item" href="disconnect_script.php">Deconnexion</a></li>
                </ul>
            </div>
        </form>
        </nav>
    <?php endif; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>