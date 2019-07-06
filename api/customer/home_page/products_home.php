<?php

  //headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: GETS');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods, Content-Type, Authorization, X-Requested-With');

  //import file
  include_once '/var/www/html/E-Commerce/config/database.php';
  include_once '/var/www/html/E-Commerce/models/products.php';

  //Instantiate DB and connect
  $database = new database();
  $db = $database->connect();

  //Instantiate user with Constructor
  $product = new product($db);


  //use query: bu using fuction read()
  $result = $product->read();

  //get row Count
  $count = $result->rowCount();


    $user_array = array();
    $user_array['data'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)){
      extract($row);

      //$user_item = array('id' => $p_id, 'name'=>$UserName,'email'=>$UserEmail,'phone'=>$UserPhone, 'dob'=>$DOB, 'password'=>$UserPassword);

      //push to data
      array_push($user_array['data'],$row);
    }

    //convert to json
    echo json_encode($user_array);

  
  
?>