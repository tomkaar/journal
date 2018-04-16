<?php

require '../classes/DB.php';
require '../classes/Entry.php';
require 'session_start.php';

$entry = new Entry;

$entry->removeEntry($_POST["entryID"]);

header("Location: ../index.php?message=Success, your post was deleted!");
