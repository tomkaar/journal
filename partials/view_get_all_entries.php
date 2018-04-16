<div id="entries" class="entries">
  <h2 class="title">All Entries</h2>
  <?php

    $entries = new Entry();
    $allEntries = $entries->getAllEntries( $_SESSION["userID"] );

    foreach($allEntries as $entry):
      include 'view_entry.php';
    endforeach;

  ?>
</div>
