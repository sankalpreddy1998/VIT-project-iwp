<?php

  //headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods, Content-Type, Authorization, X-Requested-With');

  //import file
  include_once '/var/www/html/E-Commerce/config/database.php';
  include_once '/var/www/html/E-Commerce/models/partners_user.php';

  //Instantiate DB and connect
  $database = new database();
  $db = $database->connect();

  //Instantiate user with Constructor
  $partner_user = new partner_user($db);


  //Get Raw Data
  $data = json_decode(file_get_contents("php://input"));
  
  $partner_user->partner_email = $data->register_email;
  $partner_user->partner_name= $data->partner_name;
  $partner_user->partner_password= $data->register_password;


  
  //use query: bu using fuction read_email()
  $result = $partner_user->read_email();

  while($row = $result->fetch(PDO::FETCH_ASSOC)){
  extract($row);

  $x=$partner_email;
    if ($x==$data->register_email) {
        echo json_encode(array('message'=>'account already exists'));
    }
        
  }

  //send response
  if($partner_user->insert()){
    
    echo json_encode(array('message'=>'success'));
  }
  

?>