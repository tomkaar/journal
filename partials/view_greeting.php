
<div class="row greeting">
  <div class="column">
    <h2 class="ui header">Welcome, <?= $_SESSION["username"] ?>!</h2>
    <form class="form" action="partials/logout.php" method="post">
      <div class="field">
        <label for="lohout">Logout: </label>
        <input type="submit" name="" value="Logout" class="ui button">
      </div>
    </form>
  </div>
</div>
