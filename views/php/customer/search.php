<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AtTheRate - Home page</title>
    <link rel="icon" href="../../../images/resources/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../styles/styles_customer_home_page.css">
    <link rel="stylesheet" href="../../styles/styles_customer_navbar.css">
    <link rel="stylesheet" href="../../styles/styles_customer_dropdown.css">
    <link rel="stylesheet" href="../../styles/styles_customer_footer.css">
    <link rel="stylesheet" href="../../styles/styles_customer_navmenu.css">
    <link rel="stylesheet" href="../../styles/styles_customer_slideshow.css">
    <link rel="stylesheet" href="../../styles/styles_customer_search.css">
  </head>
  <body>
    <?php  include '../../resources/customer_navbar.php' ?>
    <div id="search_list" onfocusout="leave()">
        
    </div>
    <div id="search_page">
    </div>
    <?php  include '../../resources/customer_footer.php' ?>
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

  <script type="text/javascript" src="../../javascript/js_customer_navbar.js"></script>
  <script type="text/javascript" src="/E-Commerce/views/ajax/ajax_customer_search.js"></script>
</html>
