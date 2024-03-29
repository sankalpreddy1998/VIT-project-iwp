<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AtTheRate - Login</title>
    <link rel="icon" href="../../../images/resources/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../styles/styles_customer_register_navbar.css">
    <link rel="stylesheet" href="../../styles/styles_customer_dropdown.css">
    <link rel="stylesheet" href="../../styles/styles_customer_register.css">
  </head>
  <body>
    <?php  include '/var/www/html/E-Commerce/views/resources/customer_navbar.php' ?>
    <div class="form_card">
      <p id="head">REGISTER</p>
      <div class="username_fname_section">
        <label for="fname">First Name</label>
        <input id="fname" type="text" placeholder="First Name" value="">
      </div>
      <div class="username_lname_section">
        <label for="lname">Last Name</label>
        <input id="lname" type="text" placeholder="Last Name" value="">
      </div>
      <div class="email_section">
        <label for="register_email">Email</label>
        <input id="register_email" type="email" placeholder="Email" value="">
      </div>
      <div class="password_section">
        <label for="register_password">Password</label>
        <input id="register_password" type="password" placeholder="Password" value="">
      </div>
      <div class="password_retype_section">
        <label for="retype_password">Retype-Password</label>
        <input id="retype_password" type="password" placeholder="Password" value="">
      </div>
      <button id="sign_up_button" type="button" name="button">Sign Up</button>
      <p>Already Have An Account? <a href="login.php">Sign In</a> </p>
    </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../../ajax/ajax_customer_register_page.js"></script>
</html>
