<?php

  //headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: GET');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods, Content-Type, Authorization, X-Requested-With');

  //import file
  include_once '/var/www/html/E-Commerce/config/database.php';
  include_once '/var/www/html/E-Commerce/models/cart.php';

  //Instantiate DB and connect
  $database = new database();
  $db = $database->connect();

  //Instantiate user with Constructor
  $cart = new cart($db);

    session_start();
    if($cart->delete()){
        echo json_encode(array('message'=>'Order Placed Sucessfully!!'));
    }


?>
