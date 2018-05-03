<?php
require 'partials/session_start.php';

require_once 'classes/UserController.php';
require_once 'classes/Entry.php';
require_once 'classes/DB.php';

$user = new User();
$entries = new Entry();

if(!$user->isLoggedIn() && !isset($_POST["entryID"])){
  header("Location: index.php");
}

$entry = $entries->getEntry($_POST["entryID"]);

// user clicked remove
if($user->isLoggedIn() && $_POST["type"] == "remove"){
  $entries->removeEntry($_POST["entryID"]);
  header("Location: index.php?message=The entry was removed!");
}




require_once 'partials/head.php';
?>
  <!-- if user cliked edit -->
<div class="wrapper">

  <?php if($user->isLoggedIn() && $_POST["type"] == "edit"): ?>
    <div class="ui two column centered grid">
      <div class="row">
        <div class="column">
          <h2 class="ui dividing header">Edit Post</h2>
          <form class="ui form" action="partials/update_post.php" method="POST">
            <div class="field">
              <label for="title">Title</label>
              <input type="text" name="title" placeholder="Title" id="edit-title" value="<?= $entry["title"] ?>">
            </div>

            <div class="field">
              <label for="content">Content</label>
              <textarea name="content" rows="8" cols="80" placeholder="Content" id="edit-para"><?= $entry["content"] ?></textarea>
            </div>

            <input type="hidden" name="entryID" id="edit-id" value="<?= $_POST["entryID"] ?>">
            <input type="submit" value="Submit" class="ui button">
          </form>
        </div>
      </div>
    </div>

  <?php endif; ?>

</div>

<?php require 'partials/footer.php'; ?>
