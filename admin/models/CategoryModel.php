<?php
// require_once(__DIR__ . '/config/database.php');

class CategoryModel
{

    public $conn = null;
    public function __construct()
    {
        $this->conn = connectDB();
    }
    // lấy dữ tất cả các category
    public function all()
    {
        $sql = "SELECT *FROM category";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function add($data)
    {
        // Sửa câu lệnh SQL, dùng VALUES thay vì VALUE
        $sql = "INSERT INTO category(name) VALUES (:name)";

        // Chuẩn bị câu lệnh
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
    }

    public function update($data, $id)
    {
        $sql = "UPDATE category SET name=:name WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $data['id'] = $id;
        $stmt->execute($data);
    }
    /**
     * @method find_One lấy ra 1 danh mục
     * @param $id: điều kiện lấy ra 1 danh mục
     */
    public function find_One($id)
    {
        $sql = "SELECT * FROM category WHERE id=$id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function delete($id)
    {
        $sql = "DELETE FROM category WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }
}
