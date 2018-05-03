<div class="row entries">
  <div class="column">
    <h2 class="ui header">All your entries</h2>
    <?php

      $entries = new Entry();
      $allEntries = $entries->getAllEntries( $_SESSION["userID"] );

      foreach($allEntries as $entry):
        include 'view_entry.php';
      endforeach;

    ?>
  </div>
</div>
