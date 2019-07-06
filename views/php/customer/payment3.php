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
        #table {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 98%;
        margin-left:10px;
        }

        #table td, #table th {
        border: 1px solid #ddd;
        padding: 8px;
        height:100px;
        }

        #table tr:nth-child(even){background-color: #f2f2f2;}

        #table tr:hover {background-color: #ddd;}

        #table th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: red;
        color: white;
        }
        #table td img{
            position:relative;
            bottom:200px;
        }

        #table1 {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 70%;
        margin-left:10px;
        margin-top:50px;
        }

        #table1 td, #table1 th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        #table1 tr:nth-child(even){background-color: #f2f2f2;}

        #table1 tr:hover {background-color: #ddd;}

        #table1 th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: red;
        color: white;
        }

        #table3 {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 70%;
        margin-left:10px;
        margin-top:50px;
        }

        #table3 td, #table3 th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        #table3 tr:nth-child(even){background-color: #f2f2f2;}

        #table3 tr:hover {background-color: #ddd;}

        #table3 th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: red;
        color: white;
        }

        .button{
        background-color:red;
        width:200px;
        font-size:20px;
        margin-top:150px;
        margin-bottom:30px;
        margin-left:10px;
        color:white;
        border:none;
        padding:20px;
        }
        #h1{
          margin-top:150px;
          margin-left:10px;
        }
        #h2{
          margin-top:100px;
          margin-left:10px;
        }
        </style>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php  include '../../resources/customer_navbar.php' ?>
    <div id="search_list" onfocusout="leave()">

    </div>
    <div id="cart_page">
    <?php
              if(isset($_SESSION['fname'])){
                echo file_get_contents("../../../html_resources/final.html");
              }
              else {
                echo file_get_contents("../../../html_resources/retry.html");
              }
    ?>
    </div>
    <h2 id="h2">Extra Details</h2>
    <table id="table1">
              <tr>
                <th>Extra details</th>
                <th>Info</th>
              </tr>
              <tr>
                <td>Delivery Address: </td>
                <td><?php echo $_POST['address'];?></td>
              </tr>
              <tr>
                <td>Payent Method: </td>
                <td><?php echo $_POST['pay_met'];?></td>
              </tr>
    </table>
    <table id="table3">
              <tr>
                <th>Bill details</th>
                <th>Info</th>
              </tr>
    </table>
    <button id="#checkout" class="button" onclick="order()">Place Order</button>
</body>
<script src="/E-Commerce/views/ajax/ajax_customer_final.js"></script>
  <script type="text/javascript" src="../../javascript/js_customer_slideshow.js"></script>
  <script type="text/javascript" src="../../javascript/js_customer_navbar.js"></script>
</html>