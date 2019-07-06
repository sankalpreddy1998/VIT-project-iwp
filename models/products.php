<?php
  class product{
    //DB Stuff
    private $conn;
    private $table = 'products';

    //posts properties
    public $p_id;
    public $name;
    public $description;
    public $price;
    public $brand;
    public $model;
    public $model_name;
    public $product_dimensions;
    public $item_model_no;
    public $included_components;
    public $no_of_items;
    public $battery_average_life;
    public $batteries_required;
    public $battery_cell_composition;
    public $colour;
    public $memory_size;
    public $ram_size;
    public $material;
    public $size;
    public $type;
    public $partner_id;
    public $no_of_photos;
    public $no_of_videos;
    public $status;


    //Constructor with
    public function __construct($db){
      $this->conn = $db;
    }


    //Get users

    public function read(){

      //Create Query
      //$query = 'SELECT p.p_id as p_id, p.name as pname, p.description as pdescription, p.price as price, p.brand as brand, p.model as model, p.model_name as model_name, p.product_dimensions as product_dimensions, p.item_model_no as item_model_no, p.included_components as included_components, p.no_of_items as no_of_items, p.battery_average_life as battery_average_life, p.batteries_requried as batteries_requried, p.battery_cell_composition as battery_cell_composition, p.colour as colour, p.series as series, p.memory_size as memory_size, p.ram_size as ram_size, p.material as material, p.size as size, p.type as type, p.partner_id as partner_id, p.no_of_photos as no_of_photos, p.no_of_videos as no_of_videos, p.status as pstatus FROM '.$this->table.' p';

      $query = 'SELECT * FROM '.$this->table.';';

      //prepare statement
      $stmt = $this->conn->prepare($query);

      //execute Query
      $stmt->execute();

      //return PDOStatement
      return $stmt;
    }

}
