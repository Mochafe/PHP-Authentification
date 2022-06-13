<?php
session_start();

if(!isset($_SESSION["auth"])) {
    header("Location: index.php");
    exit;
}
include("db.php");
$db = ConnexionBase();

$request = $db->prepare("SELECT user_firstname, user_lastname, user_mail FROM user WHERE user_id = :user_id");
$request->execute(array(
    "user_id" => $_SESSION["user_id"]
));

$user = $request->fetch(PDO::FETCH_OBJ);
$request->closeCursor();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <title>Détail- <?php echo($user->user_firstname . " " . $user->user_lastname); ?></title>
</head>
<body>
    <div class="container">
    <h1 class="border-bottom">Information</h1>

        <div class="row">
            <div class="col-6 mt-3">
                <label for="first-name" class="form-label">Prénom</label>
                <input type="text" id="first-name" class="form-control" value="<?php echo($user->user_firstname); ?>" readonly>
            </div>
            <div class="col-6 mt-3">
                <label for="last-name" class="form-label">Nom</label>
                <input type="text" id="last-name" class="form-control" value="<?php echo($user->user_lastname); ?>" readonly>
            </div>
            <div class="col-6 mt-3">
                <label for="mail" class="form-label">Mail</label>
                <input type="mail" id="mail" class="form-control" value="<?php echo($user->user_mail); ?>" readonly>
            </div>
        </div>

        <a href="index.php" class="btn btn-primary mt-3">Retour</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>