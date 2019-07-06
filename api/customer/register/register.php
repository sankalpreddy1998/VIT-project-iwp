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
  
  $customer_user->customer_email = $data->email;
  $customer_user->customer_fname= $data->fname;
  $customer_user->customer_lname= $data->lname;
  $customer_user->customer_password= $data->password;


  
  //use query: bu using fuction read_email()
  $result = $customer_user->read_email();

  while($row = $result->fetch(PDO::FETCH_ASSOC)){
  extract($row);

  $x=$customer_email;
    if ($x==$data->email) {
        echo json_encode(array('message'=>'account already exists'));
    }
        
  }

  //send response
  if($customer_user->insert()){
    
   
    session_start();
    $_SESSION['email']=$data->email;
    $_SESSION['fname']=$data->fname;

    $result = $customer_user->read_id_from_email();
    $row = $result->fetch(PDO::FETCH_ASSOC);
    $_SESSION['id']=$row['customer_id'];
    echo json_encode(array('message'=>'success'));
    
  }
  

?>