<?php
  class customer_user{
    //DB Stuff
    private $conn;
    private $table = 'customers_table';

    //posts properties
    public $customer_id;
    public $customer_fname;
    public $customer_lname;
    public $customer_email;
    public $customer_password;

    //Constructor with
    public function __construct($db){
      $this->conn = $db;
    }


    //create function
    public function insert(){
        //query
        $query = 'INSERT INTO '.$this->table.' SET customer_id = UUID(), customer_fname = :customer_fname, customer_lname = :customer_lname,customer_email = :customer_email, customer_password = :customer_password';
  
        //prepare statement
        $stmt = $this->conn->prepare($query);
  
        //Clean Data
        $this->customer_fname = htmlspecialchars(strip_tags($this->customer_fname));
        $this->customer_lname = htmlspecialchars(strip_tags($this->customer_lname));
        $this->customer_email = htmlspecialchars(strip_tags($this->customer_email));
        $this->customer_password = htmlspecialchars(strip_tags($this->customer_password));
  
        //Bind params
        $stmt->bindParam(':customer_fname',$this->customer_fname);
        $stmt->bindParam(':customer_lname',$this->customer_lname);
        $stmt->bindParam(':customer_email',$this->customer_email);
        $stmt->bindParam(':customer_password',$this->customer_password);
  
        if($stmt->execute()){
          return true;
        }
    }



    public function read_email(){

      //Create Query
      $query = 'SELECT c_t.customer_email as customer_email
                FROM '.$this->table.' c_t';

      //prepare statement
      $stmt = $this->conn->prepare($query);

      //execute Query
      $stmt->execute();

      //return PDOStatement
      return $stmt;
    }



    public function read_id_from_email(){

      //Create Query
      $query = "SELECT c_t.customer_id as customer_id
                FROM ".$this->table." as c_t"." WHERE c_t.customer_email= :customer_email" ;

      //prepare statement
      $stmt = $this->conn->prepare($query);

      //Clean Data
      $this->customer_email = htmlspecialchars(strip_tags($this->customer_email));

      //Bind params
      $stmt->bindParam(':customer_email',$this->customer_email);

      //execute Query
      $stmt->execute();

      //return PDOStatement
      return $stmt;
    }



    public function read_credentials(){

      //Create Query
      $query = 'SELECT c_t.customer_id as customer_id ,c_t.customer_email as customer_email ,c_t.customer_fname as customer_fname ,c_t.customer_lname as customer_lname , c_t.customer_password as customer_password 
                FROM '.$this->table.' c_t';

      //prepare statement
      $stmt = $this->conn->prepare($query);

      //execute Query
      $stmt->execute();

      //return PDOStatement
      return $stmt;
    }

}