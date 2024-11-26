<?php
require_once 'model/usermodel.php';
require_once 'model/ProductModel.php';  

class UserController
{
    private $UserModel;


    function __construct()
    {
        $this->UserModel = new UserModel();
    }
    function register()
    {
        $category = (new ProductModel)->getAllcategory();
        $error = $success = '';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $fullname = trim($_POST['fullname']);
            $email = trim($_POST['email']);
            $phone_number = trim($_POST['phone_number']);
            $password = trim($_POST['password']);
        if ($this->UserModel->check($fullname, $email, $phone_number)) {
                $error = "Email, Số điện thoại hoặc Họ tên đã tồn tại. Vui lòng sử dụng thông tin khác!";
        } else {

        if ($this->UserModel->register($fullname, $email, $phone_number, $password)) {
                    $success = "Đăng ký thành công!";
        } else {
                    $success = "Đăng ký thành công!";
                }
            }
        }
        include "view/header.php";
        include "view/User/register.php";
        include "view/footer.php";
    }
    public function login()
    {
        $category = (new ProductModel)->getAllcategory();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = $this->UserModel->getUserByEmail($email);
        if ($user && $password === $user['password']) {
                $_SESSION['user'] = [
                    'id' => $user['id'],
                    'email' => $user['email'],
                    'fullname' => $user['fullname'],
                    'phone_number' => $user['phone_number'],
                    'role' => $user['role'],
                    'password' => $user['password'],
                    'adress' => $user['adress'],
                ];
            header('Location:index.php');
        } else {
                $error = "Email hoặc mật khẩu sai!";
                include "view/header.php";
                include "view/User/login.php";
                include "view/footer.php";
            }
        } else {
            include "view/header.php";
            include "view/User/login.php";
            include "view/footer.php";
        }
    }
    public function logout()
    {
        session_destroy();
        header("Location: index.php ");
        exit();
    }
    public function inforuser()
    {
        $category = (new ProductModel)->getAllcategory();
        if (isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
            $id = $user['id'];
        } else {
            header("Location: User/login.php");
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fullname = $_POST['fullname'];
            $phone_number = $_POST['phone_number'];
            $adress = $_POST['adress'];
            $updated = $this->UserModel->update($id, $fullname, $phone_number, $adress);

            if ($updated) {
                $_SESSION['user']['fullname'] = $fullname;
                $_SESSION['user']['phone_number'] = $phone_number;
                $_SESSION['user']['adress'] = $adress;
                header("Location: index.php?success=1");
                exit;
            } else {
                echo "Chỉnh sửa không thành công";
            }
        }
        include "view/header.php";
        include "view/User/infouser.php";
        include "view/footer.php";
    }
}
