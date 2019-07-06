<?php
  class address_customer{
    //DB Stuff
    private $conn;
    private $table = 'address_customer';

    //posts properties
    public $address_customer_address_id;
    public $address_customer_customer_id;
    public $address_customer_address;

    //Constructor with
    public function __construct($db){
      $this->conn = $db;
    }


    //create function
    public function insert(){
        //query
        $query = 'INSERT INTO '.$this->table.' SET address_id = UUID(), customer_id = :customer_id, address_name = :address_name';
  
        //prepare statement
        $stmt = $this->conn->prepare($query);
  
        foreach ($this->address_customer_address as &$value){
        
        
        //Clean Data
        $this->address_customer_customer_id = htmlspecialchars(strip_tags($this->address_customer_customer_id));
        $value = htmlspecialchars(strip_tags($value));
            
        
        
        //Bind params
        $stmt->bindParam(':customer_id',$this->address_customer_customer_id);
        $stmt->bindParam(':address_name',$value);
        $stmt->execute();
        }
        return true;
    }

    public function read(){

      //Create Query
      $query = 'SELECT a.address_name as address_name
                FROM '.$this->table.' a where a.customer_id="'.$_SESSION['cust_id'].'";';
      //prepare statement
      $stmt = $this->conn->prepare($query);

      //execute Query
      $stmt->execute();

      //return PDOStatement
      return $stmt;
    }


}