<?php

  //headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods, Content-Type, Authorization, X-Requested-With');


     //Get Raw Data
    $data = json_decode(file_get_contents("php://input"));

    session_start();
    

    //convert to json
    echo json_encode(array('message'=>'success'));


?>
