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
        include 'views/listuser.php';
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
        include 'views/adduser.php';
    }

 
    public function delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->model->delete($id);
            header('Location: ?action=listuser');
        }
    }
}
