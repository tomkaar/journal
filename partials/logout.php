<?php

require '../classes/UserController.php';
require 'session_start.php';

$user = new User();
$user->logout();

header("Location: ../index.php?message=You are no longer logged in");
