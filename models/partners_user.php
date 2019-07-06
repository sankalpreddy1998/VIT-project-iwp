<?php
  class partner_user{
    //DB Stuff
    private $conn;
    private $table = 'partner_table';

    //posts properties
    public $partner_id;
    public $partner_name;
    public $partner_email;
    public $partner_password;

    //Constructor with
    public function __construct($db){
      $this->conn = $db;
    }


    //create function
    public function insert(){
        //query
        $query = 'INSERT INTO '.$this->table.' SET partner_id = UUID(), partner_name = :partner_name, partner_email = :partner_email, partner_password = :partner_password';
  
        //prepare statement
        $stmt = $this->conn->prepare($query);
  
        //Clean Data
        $this->partner_name = htmlspecialchars(strip_tags($this->partner_name));
        $this->partner_email = htmlspecialchars(strip_tags($this->partner_email));
        $this->partner_password = htmlspecialchars(strip_tags($this->partner_password));
  
        //Bind params
        $stmt->bindParam(':partner_name',$this->partner_name);
        $stmt->bindParam(':partner_email',$this->partner_email);
        $stmt->bindParam(':partner_password',$this->partner_password);
  
        if($stmt->execute()){
          return true;
        }
    }



    public function read_email(){

      //Create Query
      $query = 'SELECT p_t.partner_email as partner_email
                FROM '.$this->table.' p_t';

      //prepare statement
      $stmt = $this->conn->prepare($query);

      //execute Query
      $stmt->execute();

      //return PDOStatement
      return $stmt;
    }

    public function read_credentials(){

      //Create Query
      $query = 'SELECT p_t.partner_email as partner_email ,p_t.partner_name as partner_name , p_t.partner_password as partner_password 
                FROM '.$this->table.' p_t';

      //prepare statement
      $stmt = $this->conn->prepare($query);

      //execute Query
      $stmt->execute();

      //return PDOStatement
      return $stmt;
    }

}