<?php
    session_start();
    $_SESSION["user_name"] = $_POST["user_name"] ?? "null";
    $_SESSION["user_lastname"] = $_POST["user_lastname"] ?? "null";
    echo $_SESSION["user_name"] . " " . $_SESSION["user_lastname"];
?>