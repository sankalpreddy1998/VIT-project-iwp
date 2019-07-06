<?php

  //headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods, Content-Type, Authorization, X-Requested-With');


  //import file
  include_once '/var/www/html/E-Commerce/config/database.php';
  include_once '/var/www/html/E-Commerce/models/customers_users.php';

  //Instantiate DB and connect
  $database = new database();
  $db = $database->connect();

  //Instantiate user with Constructor
  $customer_user = new customer_user($db);


  //Get Raw Data
  $data = json_decode(file_get_contents("php://input"));
  $n=0;

  //use query: bu using fuction read_email()
  $result = $customer_user->read_credentials();

  while($row = $result->fetch(PDO::FETCH_ASSOC)){
  extract($row);
  
  $x=$customer_email;
  $y=$customer_password;
  $z=$customer_fname;
  $id = $customer_id;
    if ($x==$data->email) {
        $n=1;
        if ($y==$data->password) {
          echo json_encode(array('message'=>'success'));
          session_start();
          $_SESSION["cust_id"] = $id;
          $_SESSION["email"] = $x;
          $_SESSION["fname"] = $z;
        } else {
          echo json_encode(array('message'=>'wrong password'));
        }   
    }   
  }


  if ($n==0) {
    echo json_encode(array('message'=>'not registered'));
    
  } 

?>
