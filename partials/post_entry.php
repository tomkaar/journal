<?php

require '../classes/DB.php';
require '../classes/Entry.php';
require 'session_start.php';

$entry = new Entry;

$entry->postNewEntry($_POST["title"], $_POST["content"], $_SESSION["userID"]);

header("Location: ../index.php?message=Success, new entry was posted!");
