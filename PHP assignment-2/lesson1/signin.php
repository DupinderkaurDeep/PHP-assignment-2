<?php
  require './inc/header.php';
?>
  <section class="signin-masthead">
    <div>
      <h3>Sign In</h3>
    </div>
  </section>
  <main>
    <section class="sign-in">
      <div class="A-C">
        <h3>have you signed-in</h3>
        <p>Sign in below</p>
        <form method="post" action="./inc/validate.php">
          <p><input class="one-form" name="username" type="text" placeholder="Username" required /></p>
          <p><input class="one-form" name="password" type="password" placeholder="Password" required /></p>
          <input class="btn btn-primary" type="submit" value="Login" />
        </form>
      </div>
    </section>
  </main>
<?php
  require './inc/footer.php';
?>
