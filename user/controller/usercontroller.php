<?php
require_once 'model/usermodel.php';

class userController
{
    private $userModel;

    function __construct()
    {
        $this->userModel = new userModel();
    }

    function register()
    {
        $error = $success = ''; // Khởi tạo các biến thông báo

        if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Kiểm tra phương thức POST
            // Lấy dữ liệu từ form và loại bỏ khoảng trắng thừa
            $fullname = trim($_POST['fullname']);
            $email = trim($_POST['email']);
            $phone_number = trim($_POST['phone_number']);
            $password = trim($_POST['password']);

            // Kiểm tra dữ liệu từ model (kiểm tra trùng lặp email, phone, fullname)
            if ($this->userModel->check($fullname, $email, $phone_number)) {
                $error = "Email, Số điện thoại hoặc Họ tên đã tồn tại. Vui lòng sử dụng thông tin khác!";
            } else {
                // Đăng ký thành công
                if ($this->userModel->register($fullname, $email, $phone_number, $password)) {
                    $success = "Đăng ký thành công!";
                } else {
                    $success = "Đăng ký thành công!";
                }
            }
        }

        // Truyền biến lỗi hoặc thông báo thành công ra view
        include "view/header.php";
        include "view/register.php";
        include "view/footer.php";
    }
    public function login()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $email = $_POST['email'];
            $password = $_POST['password'];
            // Lấy user từ database
            $user = $this->userModel->getUserByEmail($email);
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
                // Sai email hoặc mật khẩu
                $error = "Invalid email or password!";
                include "view/header.php";
                include "view/login.php";
                include "view/footer.php";
            }
        } else {
            include "view/header.php";
            include "view/login.php";
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
        // Khởi tạo session nếu chưa khởi tạo
        // Kiểm tra xem người dùng đã đăng nhập chưa
        if (isset($_SESSION['user'])) {
            $user = $_SESSION['user']; // Lấy thông tin người dùng từ session
            $id = $user['id']; // Lấy ID người dùng từ session
        } else {
            // Nếu chưa đăng nhập, chuyển hướng về trang login
            header("Location: login.php");
            exit;
        }

        // Xử lý khi người dùng gửi form cập nhật
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fullname = $_POST['fullname'];
            $phone_number = $_POST['phone_number'];
            $adress = $_POST['adress'];
            // Cập nhật thông tin người dùng
            $updated = $this->userModel->update($id, $fullname, $phone_number, $adress);
            // Kiểm tra kết quả cập nhật
            if ($updated) {
                $_SESSION['user']['fullname'] = $fullname;
                $_SESSION['user']['phone_number'] = $phone_number;
                $_SESSION['user']['adress'] = $adress;
                header("Location: index.php?success=1"); // Điều hướng về trang chủ sau khi cập nhật thành công
                exit;
            } else {
                echo "Failed to update user."; // Thông báo lỗi nếu cập nhật không thành công
            }
        }
        // Bao gồm các phần còn lại của giao diện
        include "view/header.php";
        include "view/infouser.php";
        include "view/footer.php";
    }


     
    }

