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
        $sql = "INSERT INTO product(category_id, title, price, discount, thumbnail, description, created_at, updated_at, status) VALUE (:category_id, :title, :price, :discount, :thumbnail, :description, :created_at, :updated_at, :status)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
    }
    public function update($data, $id)
    {
        $sql = "UPDATE product SET category_id=:category_id, title=:title, price=:price, discount=:discount, thumbnail=:thumbnail, description=:description, created_at=:created_at, updated_at=:updated_at status=:status WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $data['id'] = $id;
        $stmt->execute($data);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM product WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }
}
