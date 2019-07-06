<?php
  class cart{
    //DB Stuff
    private $conn;
    private $table = 'cart_table';

    //posts properties
    public $cart_id;
    public $product_id;
    public $no_of_items;

    //Constructor with
    public function __construct($db){
      $this->conn = $db;
    }
   
    //Get users

    public function read(){

      //Create Query
      $query = 'SELECT c.cart_id as cart_id, c.product_id as product_id, c.no_of_items as no_of_items
                FROM '.$this->table.' c';

      //prepare statement
      $stmt = $this->conn->prepare($query);

      //execute Query
      $stmt->execute();

      //return PDOStatement
      return $stmt;
    }


    public function read_me(){

      //Create Query
      $query = 'SELECT c.cart_id as cart_id, c.product_id as product_id, c.no_of_items as no_of_items
                FROM '.$this->table.' c where c.cart_id="'.$_SESSION['cust_id'].'";';

      //prepare statement
      $stmt = $this->conn->prepare($query);

      //execute Query
      $stmt->execute();

      //return PDOStatement
      return $stmt;
    }



    //create function
    public function create(){
      //query
      $query = 'INSERT INTO '.$this->table.' SET cart_id = :cart_id, product_id = :product_id, no_of_items = :no_of_items';

      //prepare statement
      $stmt = $this->conn->prepare($query);

      //Clean Data
      $this->cart_id = htmlspecialchars(strip_tags($this->cart_id));
      $this->product_id = htmlspecialchars(strip_tags($this->product_id));
      $this->no_of_items = htmlspecialchars(strip_tags($this->no_of_items));

      //Bind params
      $stmt->bindParam(':cart_id',$this->cart_id);
      $stmt->bindParam(':product_id',$this->product_id);
      $stmt->bindParam(':no_of_items',$this->no_of_items);

      if($stmt->execute()){
        return true;
      }
      printf("Error: %s.\n",$stmt->error);

      return false;
    }


    //delete function
    public function delete(){
      //query
      $query = 'DELETE FROM '.$this->table.' WHERE cart_id = "'.$_SESSION['cust_id'].'";';

      //prepare statement
      $stmt = $this->conn->prepare($query);

      if($stmt->execute()){
        return true;
      }

      //print error
      printf("Error: %s.\n",$stmt->error);

      return false;
    }
}
