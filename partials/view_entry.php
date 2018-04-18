<div class="entry">
  <form class="form" action="update-entry.php" method="POST">
    <h3 class="small-title">
      <?= $entry["title"]; ?>
    </h3>
    <p class="paragraph">
      <?= $entry["content"]; ?>
    </p>
    <input type="hidden" name="entryID" value="<?= $entry["entryID"] ?>">
    <input type="submit" class="form-50" name="type" value="edit" />
    <input type="submit" class="form-50" name="type" value="remove" />
  </form>
</div>
