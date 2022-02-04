<?php
include('../config.php');
if(isset($_SESSION['loggedIn'])){
  header("Location:index.php");
  exit;
}
?>
<html>
  <head>
    <title>
      Login
    </title>
    <link rel="stylesheet" href="my-styles.css">
  </head>

  <body>
    <div class="wrapper">
  <div class="container">
    <div class="col-left">
      <div class="login-text">
        <h2>Welcome Back</h2>
        <p>Twig the<br>Portfolios</p>
      </div>
    </div>
    <div class="col-right">
      <div class="login-form">
        <h2>Login</h2>
        <form method="post">
          <p>
            <label>Username or email address<span>*</span></label>
            <input type="text" name="email" placeholder="Username or Email" required>
          </p>
          <p>
            <label>Password<span>*</span></label>
            <input type="password" name="pwd" placeholder="Password" required>
          </p>
          <p>
            <input type="submit" name="submit" value="Sign In" />
          </p>

        </form>
        <?php 
        if(isset($_POST['submit'])){
          extract($_POST);
          $helper = new Helper;
          $helper->login([$pwd, $email]);
        }
        ?>
      </div>
    </div>
  </div>
  <div class="credit">
    Powered by <a href="http://jdbprojects.tech">JDB projects</a>
  </div>
</div>
    
  </body>
</html>