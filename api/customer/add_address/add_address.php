<?php

  //headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods, Content-Type, Authorization, X-Requested-With');

  //import file
  include_once '/var/www/html/E-Commerce/config/database.php';
  include_once '/var/www/html/E-Commerce/models/address_customer.php';

  session_start();

  //Instantiate DB and connect
  $database = new database();
  $db = $database->connect();

  //Instantiate user with Constructor
  $address_customer = new address_customer($db);


  //Get Raw Data
  $data = json_decode(file_get_contents("php://input"));
  
  $address_customer->address_customer_customer_id = $_SESSION['id'];
  $address_customer->address_customer_address= $data->address;
  
  
  //send response
  if($address_customer->insert()){

    echo json_encode(array('message'=>'success'));
    
  }
  

?>