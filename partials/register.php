<?php

require '../classes/UserController.php';
require 'session_start.php';

$user = new User();
$user->register($_POST["username"], $_POST["password"]);
$user->login($_POST["username"], $_POST["password"]);

header("Location: ../index.php?message=You are now logged in");
