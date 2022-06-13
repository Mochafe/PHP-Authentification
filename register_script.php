<?php

    if(!isset($_REQUEST["first-name"]) || $_REQUEST["first-name"] == ""
     || !isset($_REQUEST["last-name"]) || $_REQUEST["last-name"] == "" 
     || !isset($_REQUEST["mail"]) || $_REQUEST["mail"] == "" 
     || !isset($_REQUEST["password"]) || $_REQUEST["password"] == "" ){

       header("Location: index.php?error=true");
        exit;
    }

    session_start();

    include("db.php");
    $db = ConnexionBase();

    $request = $db->prepare("INSERT INTO user (user_firstname, user_lastname, user_mail, user_password) VALUES (:firstname, :lastname, :mail, :password)");
    $request->execute(array(
        "firstname" => $_REQUEST["first-name"],
        "lastname" => $_REQUEST["last-name"],
        "mail" => $_REQUEST["mail"],
        "password" => password_hash($_REQUEST["password"], PASSWORD_DEFAULT)
    ));
    $request->execute();
    $request->closeCursor();

    header("Location: login_script.php?password=" . $_REQUEST["password"] . "&mail=" . $_REQUEST["mail"]);
    exit;
?>