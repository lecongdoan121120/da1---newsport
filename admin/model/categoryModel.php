<?php
include "../config/database.php";

class categorytModel
{
  public $conn;

  function __construct()
  {
    $this->conn = connectDB();
  }

}

