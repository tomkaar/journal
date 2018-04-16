<div class="entry">
  <h3 class="small-title">
    <?= $entry["title"]; ?>
  </h3>
  <p class="paragraph">
    <?= $entry["content"]; ?>
  </p>
  <form action="partials/view_edit_post.php" method="post">
    <input type="hidden" name="entryID" value="<?= $entry["entryID"] ?>">
    <input type="submit" name="edit" value="Edit">
  </form>
  <form action="partials/remove_post.php" method="post">
    <input type="hidden" name="entryID" value="<?= $entry["entryID"] ?>">
    <input type="submit" name="" value="Remove">
  </form>
</div>
