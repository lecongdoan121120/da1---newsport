<?php
class UserController
{
    private $model;

    public function __construct()
    {
        $this->model = new UserModel();
    }
    public function getuser()
    {

        $user = $this->model->getAll();
        include 'views/sidebar.php';
        include 'views/UserAdmin/listuser.php';
    }
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $phone_number = $_POST['phone_number'];
            $password = $_POST['password'];
            $role = $_POST['role'];
            $adress = $_POST['adress'];
            $user = $this->model->create($fullname, $email, $phone_number, $password, $role, $adress);
            if ($user) {
                header('Location: ?action=listuser');
            } else {
                echo "Tạo tài khoản thất bại.";
            }
        }
        include 'views/sidebar.php';
        include 'views/UserAdmin/adduser.php';
    }

 
    public function delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->model->delete($id);
            header('Location: ?action=listuser');
        }
    }
    public function edit()
    {
        $id = $_GET['id'] ;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy dữ liệu từ form
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $phone_number = $_POST['phone_number'];
            $password = $_POST['password'];
            $role = $_POST['role'];
            $adress = $_POST['adress'];

            // Cập nhật thông tin người dùng
            $updated = $this->model->updateUser($id, $fullname, $email, $phone_number, $password, $role, $adress);
            if ($updated) {
                header("Location: index.php?action=listuser");
                exit;
            } else {
                echo "Cập nhật không thành công.";
            }
        }

        // Lấy thông tin người dùng từ CSDL để hiển thị trong form
        $user = $this->model->getUserById($id);
        if (!$user) {
            echo "Người dùng không tồn tại.";
            exit;
        }

        // Hiển thị giao diện chỉnh sửa
        include 'views/sidebar.php';
        include 'views/UserAdmin/edituser.php';
    }






} 
