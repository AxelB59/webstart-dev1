<?php
include_once('db.php');

session_start();

if (isset($_POST["action"]) && $_POST["action"] == "login") {
    // TODO : Ajouter les contrôles des valeurs
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($user_id = getUserId($username, $password)) {
        $_SESSION["id"] = $user_id;
    }
}
if (isset($_POST["action"]) && $_POST["action"] == "logout") {
    //unset($_SESSION["id"]);
    $_SESSION = [];
}

header('Location: sessions.php');

?>