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
    <link rel="stylesheet" href="../../styles/styles_customer_card.css">
    <style>
      #list{
        margin-left:40px;
        margin-top:10px;
        width:800px;
        
      }
      .rad{
        padding:20px;
        display:flex;
        border: 1px solid lightslategrey;
        border-radius: 10px;
        margin:8px;
      }
      .rad p{
        margin-left:20px;
        font-size:20px;
      } 
      #heading{
        margin-top:160px;
        margin-left:50px;
      }
      #heading p{
        font-size:35px;
      }
      .button{
        background-color:red;
        width:200px;
        font-size:20px;
        margin-top:70px;
        color:white;
        border:none;
        padding:20px;
      }
    </style>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php  include '../../resources/customer_navbar.php' ?>
    <div id="search_list" onfocusout="leave()">

    </div>
    <div id="heading">
      <p>Select The Address Of Delivery:</p>
    </div>
    <div style="margin-top:100px;">
      <form id="list" action="payment2.php" method="post">
          
      </form>
    </div>
</body>
  <script type="text/javascript" src="../../javascript/js_customer_slideshow.js"></script>
  <script type="text/javascript" src="../../javascript/js_customer_navbar.js"></script>
  <script type="text/javascript" src="/E-Commerce/views/ajax/ajax_customer_get_address.js"></script>
</html>