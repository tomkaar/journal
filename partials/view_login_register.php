<div class="ui two container centered grid">
<div class="row login-register">
  <div class="column">
    <h3 class="ui dividing header">Login</h3>
    <form class="ui form" action="partials/login.php" method="POST">
      <div class="two fields">

        <div class="field">
          <label for="username">Username:</label>
          <input type="text" name="username" id="username" placeholder="username" required>
        </div>

        <div class="field">
          <label for="password">Password:</label>
          <input type="password" name="password" id="password" placeholder="password" required>
        </div>

      </div>

      <input type="submit" value="Login" class="ui button">
    </form>
  </div>
</div>

<div class="row login-register">
  <div class="column">
    
    <h3 class="ui dividing header">Register</h3>
    <form class="ui form" action="partials/register.php" method="POST">
      <div class="two fields">
        <div class="field">
          <label for="username">Username:</label>
          <input type="text" name="username" placeholder="username" required>
        </div>

        <div class="field">
          <label for="field">Password:</label>
          <input type="password" name="password" placeholder="password" required>
        </div>
      </div>

      <input type="submit" value="Register" class="ui button">
    </form>
  </div>
</div>

</div>
