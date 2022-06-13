<?php
    session_start();


    include("db.php");
    $db = ConnexionBase();
    $request = $db->prepare("SELECT user_id, user_mail, user_password FROM user");
    $request->execute();
    $users = $request->fetchAll(PDO::FETCH_OBJ);
    $request->closeCursor();

    foreach($users as $user) {
        if(password_verify($_REQUEST["password"], $user->user_password) && $user->user_mail == $_REQUEST["mail"]) {
            $_SESSION["auth"] = "ok";
            $_SESSION["user_id"] = $user->user_id;
        }   
    }

    header("Location: index.php");
    exit;
?>