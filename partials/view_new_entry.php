
<div class="row new-entry">
  <div class="column">
    <h2 class="ui header">Post a new Entry</h2>
    <form class="ui form" action="partials/post_entry.php" method="POST">

      <div class="field">
        <label for="Title">Title</label>
        <input type="text" name="title" placeholder="Title" required>
      </div>

      <div class="field">
        <label for="content">Content</label>
        <textarea name="content" placeholder="Content" required></textarea>
      </div>

      <input type="submit" value="Submit" class="ui button">
    </form>
  </div>
</div>
