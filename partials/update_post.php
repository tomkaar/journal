<?php


require_once '../partials/session_start.php';
require_once '../classes/DB.php';
require_once '../classes/Entry.php';

$entries = new Entry;

$entry = $entries->updateEntry($_POST["title"], $_POST["content"], $_POST["entryID"]);

header("Location: ../index.php?message=Post Updated!");
