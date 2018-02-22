<?php
    require_once("functions.php");
    echo connexion($_POST["login"], $_POST["mdp"]);
?>