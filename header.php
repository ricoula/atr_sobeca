<?php 
  session_start();
  include("API/functions.php");
  if(isset($_POST["deconnexion"]) && $_POST["deconnexion"] == "true")
  {
    session_destroy();
    header('Location: index.php');
    exit();
  }
  if(isset($_POST["username"]) && $_POST["username"] != null && isset($_POST["password"]) && $_POST["password"] != null)
  {
    $user = json_decode(connexion($_POST["username"], $_POST["password"]));
    if($user != null)
    {
      $_SESSION["user_json"] = json_encode($user);
    }
    else{
      session_destroy();
      header('Location: index.php');
      exit();
    }
  }
  if(isset($_SESSION["user_json"]) && $_SESSION["user_json"] != null)
  {
    $user = json_decode($_SESSION["user_json"]);
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/chosen/chosen.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
  
  </body>
</html>