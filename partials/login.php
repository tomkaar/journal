<?php

require '../classes/UserController.php';
require 'session_start.php';

$user = new User();
$user->login($_POST["username"], $_POST["password"]);

if( $user->isLoggedIn() ){
  header("Location: ../index.php?message=You logged in");
}
else {
  header("Location: ../index.php?message=Something went wrong");
}
