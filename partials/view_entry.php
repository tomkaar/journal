<div class="row entry">
  <div class="ui segment">
    <form class="ui form" action="update-entry.php" method="POST">
      <h3 class="ui header">
        <?= $entry["title"]; ?>
      </h3>
      <p class="ui ">
        <?= $entry["content"]; ?>
      </p>
      <input type="hidden" name="entryID" value="<?= $entry["entryID"] ?>">
      <input type="submit" class="ui button" name="type" value="edit" />
      <input type="submit" class="ui button" name="type" value="remove" />
    </form>
  </div>

</div>
