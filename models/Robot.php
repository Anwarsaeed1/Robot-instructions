<?php 

  class Robot {
    // DB stuff
    private $conn;
    private $table = 'robot';

    // Robot Properties
    public $id;
    public $x;
    public $y;
 

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    
}
    
  