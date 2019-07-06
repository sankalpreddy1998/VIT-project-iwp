<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AtTheRate - Login</title>
    <link rel="icon" href="../../../images/resources/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../styles/styles_partner_navbar.css">
    <link rel="stylesheet" href="../../styles/styles_partner_dropdown.css">
    <link rel="stylesheet" href="../../styles/styles_partner_login.css">
  </head>
  <body>
    <?php  include '../../resources/partner_navbar.php' ?>
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
      <button id="sign_in_button" name="button">Sign In</button>
      <p id="password_check" style="visibility:hidden"></p>
      <p>Not Registered? <a href="register.php">Sign Up</a> </p>
    </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../../../views/javascript/js_partner_navbar.js"></script>
  <script type="text/javascript" src="/E-Commerce/views/ajax/ajax_partner_login_page.js"></script>
</html>
