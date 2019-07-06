<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AtTheRate - Login</title>
    <link rel="icon" href="../../../images/resources/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../styles/styles_customer_register_navbar.css">
    <link rel="stylesheet" href="../../styles/styles_customer_dropdown.css">
    <link rel="stylesheet" href="../../styles/styles_customer_add_address.css">
  </head>
  <body>
    <?php  include '/var/www/html/E-Commerce/views/resources/customer_navbar.php' ?>
    <div id="input">
        <div id="input_section">
            <h2>Enter Your Address</h2>
            <textarea name="" id="input_field" cols="80" rows="10" ></textarea>
            <button id="plus">+</button>
            <button id="submit" type="submit">Submit</button>
        </div>
        <div id="list_section">   
            
        </div>
    </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../../ajax/ajax_customer_add_address.js"></script>
</html>
