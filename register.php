<?php
    session_start();
    if(isset($_SESSION["auth"])) {
        header("Location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <title>Inscription</title>
</head>
<body>
    <div class="container my-3">
        <h1 class="border-bottom">Inscription</h1>

        <form action="register_script.php" method="post" class="mt-4 border border-primary row justify-content-center text-center p-3 rounded-3 ">

            <label for="last-name" class="form-label mt-3">Nom</label>
            <input type="text" name="last-name" id="last-name" class="form-control w-75" maxlength="50">

            <label for="first-name" class="form-label mt-3">Prénom</label>
            <input type="text" name="first-name" id="first-name" class="form-control w-75" maxlength="50">

            <label for="mail" class="form-label mt-3">Mail</label>
            <input type="email" name="mail" id="mail" class="form-control w-75" maxlength="320">
              
            <label for="password" class="form-label mt-3">Mot de passe</label>
            <input type="password" name="password" id="password" class="form-control w-75" minlength="4" maxlength="32">
            
            <input type="submit" class="btn btn-outline-primary mt-4 col-5" value="Inscription">
        </form>

        <a href="index.php" class="btn btn-primary mt-3">Retour</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>