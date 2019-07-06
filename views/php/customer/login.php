<?php 
session_start();
session_unset();
session_destroy(); 
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AtTheRate - Login</title>
    <link rel="icon" href="../../../images/resources/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../styles/styles_customer_login_navbar.css">
    <link rel="stylesheet" href="../../styles/styles_customer_dropdown.css">
    <link rel="stylesheet" href="../../styles/styles_customer_login.css">
  </head>
  <body>
    <?php  include '../../resources/customer_navbar.php' ?>
    <div class="form_card">
      <p id="head">LOGIN</p>
      <div class="email_section">
        <label for="login_email">Email</label>
        <input id="login_email" type="email" placeholder="Email" value="">
      </div>
      <div class="password_section">
        <label for="login_password">Password</label>
        <input id="login_password" type="password" placeholder="Password" value="">
      </div>
      <p id="password_check"></p>
      <button id="sign_in_button" name="button">Sign In</button>
      <p>Not Registered? <a href="register.php">Sign Up</a> </p>
    </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  <script src="/E-Commerce/views/ajax/ajax_customer_login_page.js"></script>
</html>
