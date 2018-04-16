<div id="edit-entry" class="edit-entry">
  <div id="edit-entry-bg" class="bg"></div>
  <div class="wrapper">
    <h2>Edit Post</h2>
    <form class="form" action="partials/update_post.php" method="POST">
      <input type="text" name="title" placeholder="Title" id="edit-title">
      <br>
      <textarea name="content" rows="8" cols="80" placeholder="Content" id="edit-para"></textarea>
      <br>
      <input type="hidden" name="entryID" id="edit-id">
      <input type="submit" value="Submit">
    </form>
  </div>
</div>
