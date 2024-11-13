<?php
include "../config/database.php";

class categorytModel
{
  public $conn;

  function __construct()
  {
    $this->conn = connectDB();
  }
  function addCategory($name)
  {
    // Prepare SQL statement with a placeholder for 'name'
    $sql = "INSERT INTO category (name) VALUES (:name)";
    $stmt = $this->conn->prepare($sql);
    // Execute the query by passing the 'name' parameter
    $stmt->execute(['name' => $name]);
  }


}

