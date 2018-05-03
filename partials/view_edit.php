<div class="row edit">
  <div class="column">
    <h2 class="ui header">Edit Post</h2>
    <form class="ui form" action="partials/update_post.php" method="POST">
      <div class="field">
        <label for="title">Title</label>
        <input type="text" name="title" placeholder="Title" id="edit-title">
      </div>

      <div class="field">
        <label for="content">content</label>
        <textarea name="content" rows="8" cols="80" placeholder="Content" id="edit-para"></textarea>
      </div>

      <input type="hidden" name="entryID" id="edit-id">
      <input type="submit" value="Submit" class="ui button">
    </form>
  </div>
</div>
