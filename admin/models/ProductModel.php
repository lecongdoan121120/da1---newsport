<?php
// require_once "./config/database.php";
class ProductModel
{
    public $conn = null;
    public function __construct()
    {
        $this->conn = connectDB();
    }
    public function all()
    {
        $sql = "SELECT * FROM product";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function add($data)
    {
        $sql = "INSERT INTO product (category_id, title, price, discount, thumbnail, description, created_at, status , stock) 
            VALUES (:category_id, :title, :price, :discount, :thumbnail, :description, :created_at, :status , :stock)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
    }

    public function update($data, $id)
    {
        $sql = "UPDATE product SET category_id=:category_id, title=:title, price=:price, discount=:discount, thumbnail=:thumbnail, description=:description, status=:status ,stock = :stock WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        // var_dump($data);
        $data['id'] = $id;
        $stmt->execute($data);
    }
    public function find_one($id)
    {
        $sql = "SELECT * FROM product WHERE id=$id";
        $stmt  = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function delete($id)
    {
        $sql = "DELETE FROM product WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }
}
