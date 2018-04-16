<?php

  require_once 'head.php';

  require_once '../classes/DB.php';
  require_once '../classes/Entry.php';

  $entries = new Entry;

  $entry = $entries->getEntry($_POST["entryID"]);

?>
<div class="wrapper">
  <h2>Edit Post</h2>
  <form class="form" action="update_post.php" method="POST">
    <input type="text" name="title" placeholder="Title" value="<?= $entry["title"] ?>">
    <br>
    <textarea name="content" rows="8" cols="80" placeholder="Content"><?= $entry["content"] ?></textarea>
    <br>
    <input type="hidden" name="entryID" value="<?= $_POST["entryID"]; ?>">
    <input type="submit" value="Submit">
  </form>
</div>



<?php
  require 'footer.php';
?>
